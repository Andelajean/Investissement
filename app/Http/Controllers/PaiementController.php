<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use FedaPay\FedaPay;
use FedaPay\Transaction;
use Illuminate\Support\Facades\Log;

class PaiementController extends Controller
{

    public function return_url(){
        return view('Produit.failed');
    }
    public function payment(Request $request)
    {
        // Configurer la clé API et l'environnement
        FedaPay::setApiKey(config('services.fedapay.secret_key'));
        FedaPay::setEnvironment(config('services.fedapay.env'));

        try {
            // Créer une transaction
            $transaction = Transaction::create([
                'amount' => $request->input('amount'),
                'currency' => ['iso' => $request->input('currency', 'XAF')],
                'description' => $request->input('description', 'Paiement FedaPay'),
                'customer' => [
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'email' => $request->input('email'),
                    'phone_number' => [
                        'number' => $request->input('phone'),
                        'country' => 'CM', // Remplacez par votre pays, par exemple 'CM' pour le Cameroun
                    ]
                ]
            ]);

            // Générez une URL de paiement
            $transaction->generateToken();
            $url = $transaction->generateToken()->url;

            return redirect($url);
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function callback(Request $request)
    {
        // Traitement du callback après le paiement
        return response()->json([
            'message' => 'Paiement reçu avec succès',
            'status' => $request->input('status')
        ]);
    }

    // Méthode de notification de paiement (callback de CinetPay)
    public function notify(Request $request)
    {
        // Simuler une erreur pour voir comment le système réagit
        if ($request->input('status') === 'FAILED') {
            Log::error('Erreur de paiement détectée!', $request->all());
            return response()->json(['status' => 'error', 'message' => 'Erreur de paiement'], 400);
        }
    
        // Sinon, loguer et afficher les informations comme précédemment
        Log::info('Notification reçue de CinetPay', $request->all());
        return response()->json(['status' => 'success', 'message' => 'Notification traitée avec succès']);
    }
    
    

    // Méthode pour gérer la réponse après le paiement (si vous avez besoin d'une page de succès)
    public function success(Request $request)
{
    $transactionId = $request->input('transaction_id');
    $paymentToken = $request->input('payment_token');  // Vous aurez le payment_token dans l'URL de retour

    $apiKey = config('services.cinetpay.api_key');
    $siteId = config('services.cinetpay.site_id');
    
    // Vérifiez le statut du paiement via l'API de CinetPay
    $data = [
        'transaction_id' => $transactionId, 
        'site_id' => $siteId,
        'apikey' => $apiKey,
    ];

    try {
        $client = new Client();
        $response = $client->post('https://api-checkout.cinetpay.com/v2/payment/check', [
            'json' => $data,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
    
        $responseData = json_decode($response->getBody(), true);
        Log::info('Réponse de vérification de paiement', $responseData);
    
        if ($responseData['code'] === '200') {
            $status = $responseData['data']['status'];
    
            if ($status === 'APPROVED') {
                return view('Produit.success', ['status' => 'Paiement réussi']);
            } else {
                return view('Produit.failed', ['status' => 'Le paiement a échoué ou est en attente']);
            }
        } else {
            return back()->with('error', 'Erreur lors de la vérification du paiement');
        }
    
    } catch (\Exception $e) {
        Log::error('Erreur lors de la vérification du paiement : ' . $e->getMessage());
        return back()->with('error', 'Erreur lors de la vérification du paiement');
    }
}

    
}

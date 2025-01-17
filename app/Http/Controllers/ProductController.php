<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function email(){
        return view('Produit.email');
    }
    public function produit(Request $request){
        $currency = $request->input('currency');

        // Redirection en fonction de la devise
        switch ($currency) {
            case 'XOF':
                return view('Produit.produit');
            case 'USD':
                return view('Produit.failed');
            case 'GNF':
                return view('Produit.success');
            case'CDF':
                return view('Produit.failed');
            default:
                return view('Produit.produit');
        }
        return view('Produit.produit');
    }
    public function confirmerInvestissement(Request $request)
    {
        $user = Auth::user(); // Récupérer l'utilisateur connecté
        $email = $user->email;
        $userId = $user->id;

        // Vérifier le solde de l'utilisateur
        $solde = DB::table('soldes')->where('id_user', $userId)->value('montant');

        if ($solde === null) {
            return back()->with('error', 'Vous n\'avez pas de solde actif. Veuillez recharger votre compte.');
        }

        $montant = $request->input('amount');

        if ($solde < $montant) {
            return back()->with('error', 'Solde insuffisant. Veuillez recharger votre compte.');
        }

        // Insérer l'investissement dans la table
        DB::table('investissements')->insert([
            'nom_investissement' => $request->input('productName'),
            'montant' => $montant,
            'duree' => $request->input('duration'),
            'gain' => $request->input('gain'),
            'devise' =>$request->input('devise'),
            'activation' =>$request->input('activation'),
            'email' => $email,
            'id_user' => $userId,
            'statut' => 'non',
            'date_investissement' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Mettre à jour le solde
        DB::table('soldes')
            ->where('id_user', $userId)
            ->update([
                'montant' => $solde - $montant,
                'mise_jour' => now(),
                'updated_at' => now(),
            ]);

        return back()->with('success', 'Votre investissement a été enregistré avec succès.');
    }
    public function contact(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'objet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Enregistrement dans la base de données
        Contact::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'objet' => $request->objet,
            'message' => $request->message,
        ]);

        // Rediriger ou afficher un message de succès
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}

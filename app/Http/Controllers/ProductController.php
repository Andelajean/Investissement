<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function produit(Request $request){
        $currency = $request->input('currency');

        // Redirection en fonction de la devise
        switch ($currency) {
            case 'XOF':
                return view('produit.produit');
            case 'USD':
                return view('produit.failed');
            case 'GNF':
                return view('produit.success');
            case'CDF':
                return view('Produit.failed');
            default:
                return view('produit.produit');
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
}

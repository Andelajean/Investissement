<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Investissement;
use App\Models\Retrait;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RetraiController extends Controller
{
    // Vérifie si l'utilisateur a des investissements actifs
    public function checkInvestissementActif(Request $request)
    {
        // Récupérer l'utilisateur connecté
        $userId = auth()->id();
    
        // Vérifier s'il a des investissements actifs
        $investissements = DB::table('investissements')
            ->where('id_user', $userId)
            ->where('statut', 'actif') // On vérifie le statut "actif"
            ->get();
    
        if ($investissements->isNotEmpty()) {
            return response()->json([
                'success' => true,
                'investissements' => $investissements
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => "Vous n'avez aucun investissement actif."
            ]);
        }
    }
    public function retraitPage()
{
    // Récupérer l'utilisateur connecté
    $userId = auth()->id();

    // Récupérer les investissements actifs
    $investissements = DB::table('investissements')
        ->where('id_user', $userId)
        ->where('statut', 'actif') // Filtrer les investissements actifs
        ->get();

    // Retourner la vue avec les investissements
    return view('dashboard', ['investissements' => $investissements]);
}


    // Stocke les demandes de retrait
    public function storeRetrait(Request $request)
    {
        $request->validate([
            'currency' => 'required|string|max:3',
            'montant' => 'required|numeric|min:5000',
            'benefice' => 'required|regex:/^\+237[0-9]{9}$/',
        ]);

        // Trouver un investissement actif pour cet utilisateur
        $investissement = Investissement::where('id_user', Auth::id())
                        ->where('statut', 'actif')
                        ->first();

        if (!$investissement) {
            return back()->with('error', "Aucun investissement actif trouvé.");
        }

        // Création de la demande de retrait
        Retrait::create([
            'id_demande' => uniqid(),
            'montant' => $request->montant,
            'statut' => 'traitement_en_cours',
            'devise' => $request->currency,
            'date_retrait' => now(),
            'nom_investissement' => $investissement->nom_investissement,
            'id_user' => Auth::id(),
        ]);

        return back()->with('success', "Demande de retrait effectuée avec succès.");
    }
}

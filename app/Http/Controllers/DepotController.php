<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depot;
use App\Models\Solde;
use Illuminate\Support\Facades\Auth;

class DepotController extends Controller
{
    public function validerDepot(Request $request)
    {
        // Valider l'entrée
        $request->validate([
            'code' => 'required|string',
        ]);

        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Trouver le dépôt correspondant au code
        $depot = Depot::where('id_depot', $request->code)
            ->where('id_user', $user->id)
            ->first();

        // Vérifier si le dépôt existe
        if (!$depot) {
            return back()->with('error', 'Dépôt introuvable ou non autorisé.');
        }

        // Vérifier si le dépôt est déjà validé
        if ($depot->statut === 'valider') {
            return back()->with('error', 'Ce dépôt a déjà été validé.');
        }

        // Mettre à jour le statut du dépôt
        $depot->update([
            'statut' => 'valider',
        ]);

        // Mettre à jour le solde de l'utilisateur
        $solde = Solde::firstOrCreate(
            ['id_user' => $user->id],
            ['montant' => 0, 'email' => $user->email]
        );

        $solde->update([
            'montant' => $solde->montant + $depot->montant,
        ]);

        return back()->with('success', 'Dépôt validé avec succès et solde mis à jour.');
    }
}

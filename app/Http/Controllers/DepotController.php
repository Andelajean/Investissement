<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depot;
use App\Models\Solde;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
    public function index(){
        // Récupère les dépôts avec pagination (30 résultats par page)
        $depots = Depot::paginate(30);
    
        // Retourne la vue avec les données paginées
        return view('admin.depots.index', compact('depots'));
    }
public function store(Request $request){
    // Validation des données du formulaire
    $request->validate([
        'montant' => 'required|numeric',
        'devise' => 'required|string|max:3',
        'email' => 'required|email',
        'id_user' => 'required|exists:users,id'
    ]);

    // Générer un ID unique pour le dépôt
    $id_depot = 'DEP-' . strtoupper(STR::random(8));

    // Enregistrer les données dans la table 'depot'
    $depot = Depot::create([
        'id_depot' => $id_depot,
        'montant' => $request->montant,
        'statut' => 'non_valider',
        'devise' => $request->devise,
        'date_depot' => now(),
        'email' => $request->email,
        'id_user' => $request->id_user,
    ]);

    // Retourner un message de succès avec l'ID du dépôt
    return redirect()->back()->with('success', "Dépôt ajouté avec succès. ID du dépôt : {$depot->id_depot}");
}
public function show($id)
{
    // Récupérer le dépôt par son ID
    $depot = Depot::findOrFail($id);

    // Retourner la vue avec le dépôt récupéré
    return view('admin.depots.show', compact('depot'));
}
public function edit($id)
{
    // Récupérer le dépôt par son ID
    $depot = Depot::findOrFail($id);

    // Retourner la vue d'édition avec le dépôt récupéré
    return view('admin.depots.edit', compact('depot'));
}
public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $request->validate([
        'montant' => 'required|numeric',
        'devise' => 'required|string|max:3',
        'email' => 'required|email',
        'id_user' => 'required|exists:users,id',
    ]);

    // Récupérer le dépôt par son ID
    $depot = Depot::findOrFail($id);

    // Mettre à jour les informations du dépôt
    $depot->update([
        'montant' => $request->montant,
        'devise' => $request->devise,
        'email' => $request->email,
        'id_user' => $request->id_user,
    ]);

    // Retourner un message de succès et rediriger
    return redirect()->route('admin.edit_depot', $depot->id)
                     ->with('success', "Le dépôt ID {$depot->id_depot} a été mis à jour avec succès.");
}
public function destroy($id)
{
    // Récupérer le dépôt par son ID
    $depot = Depot::findOrFail($id);

    // Supprimer le dépôt
    $depot->delete();

    // Retourner un message de succès et rediriger
    return redirect()->route('admin.index_depots')
                     ->with('success', "Le dépôt ID {$depot->id_depot} a été supprimé avec succès.");
}
}    


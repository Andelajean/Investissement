<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Depot;
use App\Models\Retrait;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function dashboard()
    {
        $nombrePaiements = Depot::count() + Retrait::count();
        $montantPaiements = Depot::sum('montant') + Retrait::sum('montant');
        $nombreClients = User::count();
        $nombreComptes = User::where('role', 'client')->count();
        
        $listeComptes = User::all();

        return view('admin.dashboard', compact('nombrePaiements', 'montantPaiements', 'nombreClients', 'nombreComptes', 'listeComptes'));
    }

    public function rechercherClient(Request $request)
    {
        $query = $request->input('query');
        $clients = User::where('name', 'LIKE', "%$query%")
                        ->orWhere('telephone', 'LIKE', "%$query%")
                        ->get();

        return view('admin.recherche', compact('clients'));
    }

    public function etatTransaction($id)
{
    $retrait = Retrait::find($id);
    $depot = Depot::find($id);

    // Logs pour le débogage
    Log::info('Valeur de $retrait:', ['retrait' => $retrait]);
    Log::info('Valeur de $depot:', ['depot' => $depot]);
    Log::info('ID reçu:', ['id' => $id]);

    if ($retrait) {
        $statut = $retrait->statut;
    } elseif ($depot) {
        $statut = 'succès';
        $retrait = null;
    } else {
        $statut = 'échec';
        $retrait = null;
    }

    return view('admin.etat', compact('statut', 'retrait'));
}


    


    public function changerStatutTransaction(Request $request, $id) { 
        $retrait = Retrait::find($id); 
        if ($retrait) { 
            $retrait->updateStatut($request->input('statut'));
            return redirect()->back()->with('success', 'Statut de la transaction mis à jour avec succès.');
           
        } 
             
        return redirect()->back()->with('error', 'Transaction non trouvée.');
             
    }


    public function ShowAllRetrait() { 
        $retraits = Retrait::all(); 
       
             
        return view('admin.retrait',compact('retraits'));
             
    }

    public function ShowAllTransaction() { 
        $depots = Depot::all();
        $retraits = Retrait::all();
         // Combine les deux collections et les trie par date 
        $transactions = $depots->merge($retraits)->sortByDesc('date');
             
        return view('admin.depot_retrait',compact('transactions'));
             
    }

   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Investissement;
use App\Models\Depot;
use App\Models\Retrait;

class DashboardController extends Controller
{
    //
    public function index()
    {
         // Récupérer les investissements actifs de l'utilisateur connecté
       // Récupérer les investissements actifs de l'utilisateur connecté
       $investissementsActifs = Investissement::where('id_user', auth()->id())
       ->where('statut', 'actif')
       ->get();
    
    // Récupérer l'historique des dépôts
    $depots = Depot::where('id_user', auth()->id())->get();
    $investissements = Investissement::where('id_user', auth()->id())->get();
    // Récupérer l'historique des retraits
    $retraits = Retrait::where('id_user', auth()->id())->get();
    
    // Retourner la vue avec les données
    return view('dashboard', [
       'investissementsActifs' => $investissementsActifs,
       'depots' => $depots,
       'retraits' => $retraits,
       'investissements' => $investissements,
    ]);
}
    

    public function admin()
    {
        return view('admin.dashboard');
    }
}

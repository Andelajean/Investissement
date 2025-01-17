<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Depot;
use App\Models\Investissement;
use Illuminate\Support\Str;

class DepotController extends Controller
{
    //
    public function index() { 
        $depots = Depot::paginate(10); 
        return view('admin.depots.index', compact('depots')); 
    } 
    
    public function store(Request $request)
{
    $request->validate([
        'montant' => 'required|numeric',
        'devise' => 'required|string|max:3',
        'email' => 'required|email',
        
    ]);

    $depot = new Depot();
    $depot->id_depot = Str::random(8); 
    $depot->montant = $request->montant;
    $depot->statut = 'non_valider';
    $depot->devise = $request->devise;
    $depot->email = $request->email;
    $depot->id_user = $request->id_user;
    $depot->date_depot = now(); 
    $depot->save();

   
    $investissement = Investissement::where('id_user', $request->id_user)->first();

    if ($investissement) { 
        $investissement->delete(); 
    }
    return redirect()->route('admin.depots')->with('success', 'Dépôt ajouté avec succès.');
}


public function show($id) { 
    $depot = Depot::findOrFail($id); 
    return view('admin.depots.show', compact('depot')); 
} 

public function edit($id) { 
    $depot = Depot::findOrFail($id); 
    return view('admin.depots.edit', compact('depot')); 
} 

public function update(Request $request, $id) { 
    $request->validate([ 'montant' => 'required', 'devise' => 'required|max:3', 'email' => 'required|email', 'id_user' => 'required', ]); 
    $depot = Depot::findOrFail($id); 
    $depot->update($request->all()); 
    return redirect()->route('admin.depots')->with('success', 'Dépôt mis à jour avec succès.'); 
} 

public function destroy($id) { 
    $depot = Depot::findOrFail($id); 
    $depot->delete(); 
    
    return redirect()->route('admin.depots')->with('success', 'Dépôt supprimé avec succès.'); 
}

}

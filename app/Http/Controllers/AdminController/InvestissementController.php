<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Investissement;
use Illuminate\Http\Request;

class InvestissementController extends Controller
{
    //


    public function ShowAllInvestissement(){

        $investissements = Investissement::paginate(10);;

        return view('admin.investissements.index',compact('investissements'));
    }

    public function desactiver($id){
        $investissement=Investissement::FindOrFail($id);
        $investissement->update([
            'statut'=>'non',
        ]);

        return redirect()->route('admin.investissement_all')->with('success','Investissment desactiver avec succes !');


    }

    public function activer($id){
        $investissement=Investissement::FindOrFail($id);
        $investissement->update([
            'statut'=>'oui',
        ]);

        return redirect()->route('admin.investissement_all')->with('success','Investissment activer avec succes !');


    }


    public function supprimer($id){
         $investissement =Investissement::FindOrFail($id);
         $investissement->delete();

         return redirect()->route('admin.investissement_all')->with('success','Investissment Supprimer avec succes !');

    }
}

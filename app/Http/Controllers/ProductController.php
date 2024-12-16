<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function produit(){
        return view('Produit.produit');
    }
}

<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solde; 
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function profile() { 
        return view('admin.user.profile'); 
    } 

    public function balance() { 
        $totalBalance = Solde::sum('montant'); 
        return view('admin.user.balance', compact('totalBalance')); 
    } 

    public function settings() { 
        return view('admin.user.settings'); 
    } 

    public function logout(Request $request) { 
        Auth::logout(); $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
        return redirect()->route('login'); 
    }
}

<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show() {
        // Récupérer les paramètres globaux à afficher
        return view('admin.settings');
    }

    public function update(Request $request) {
        
        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|string|email|max:255',
            'site_phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'maintenance_mode' => 'required|boolean',
        ]);

       
        config(['settings.site_name' => $request->input('site_name')]);
        config(['settings.site_email' => $request->input('site_email')]);
        config(['settings.site_phone' => $request->input('site_phone')]);
        config(['settings.address' => $request->input('address')]);
        config(['settings.maintenance_mode' => $request->input('maintenance_mode')]);

        return redirect()->route('admin.settings')->with('success', 'Paramètres mis à jour avec succès.');
    }
}

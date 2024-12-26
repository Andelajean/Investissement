<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

// use App\Http\Controllers\DepotController;
use App\Http\Controllers\RetraiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController\UserController;

use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\AdminController\DepotController;
use App\Http\Controllers\AdminController\ContactController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Investissement;
use App\Models\Depot;
use App\Models\Retrait;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.index');
});
Route::get('/plus', function () {
    return view('site.plus');
});
Route::get('/help', function () {
    return view('site.help');
});
Route::get('/contact', function () {
    return view('site.contact');
});
Route::get('/teams', function () {
    return view('site.contact');
});

Route::get('/team', function () {
    return view('site.team'); // Affiche la page about.blade.php
});

Route::get('/dashboard', function () {
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
 })->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users/produit-list',[ProductController::class,'produit'])->name('produit.list');
    Route::post('/confirmer-investissement', [ProductController::class, 'confirmerInvestissement'])->name('confirmerInvestissement');
    Route::post('/validate-depot', [DepotController::class, 'validerDepot'])->name('valider.depot');
});

require __DIR__.'/auth.php';

Route::get('/pay/success', [\App\Http\Controllers\PaiementController::class, 'callback'])->name('payment.success');
Route::post('/pay/notify', [\App\Http\Controllers\PaiementController::class, 'notify'])->name('payment.notify');
Route::get('/return_url', [\App\Http\Controllers\PaiementController::class, 'return_url'])->name('return_url');
Route::post('/payement/investissement', [\App\Http\Controllers\PaiementController::class, 'payment'])->name('paiement');

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/recherche', [AdminController::class, 'rechercherClient'])->name('admin.recherche');
    Route::get('/admin/etat-transaction/{id}', [AdminController::class, 'etatTransaction'])->name('admin.etatTransaction');
    Route::post('/admin/changer-statut-transaction/{id}', [AdminController::class, 'changerStatutTransaction'])->name('admin.changerStatutTransaction');
    Route::get('/admin/etat_transaction/all/retrait', [AdminController::class, 'ShowAllRetrait'])->name('admin.transaction_retrait');
    Route::get('/admin/etat_transaction/all', [AdminController::class, 'ShowAllTransaction'])->name('admin.transaction_all');
    Route::get('/contacts', [ContactController::class,'index'])->name('admin.contacts');
    Route::get('/profile/admin', [UserController::class, 'profile'])->name('admin.profile'); 
    Route::get('/balance', [UserController::class, 'balance'])->name('admin.balance'); 
    Route::get('/settings', [UserController::class, 'settings'])->name('admin.settings'); 
    Route::post('/logout/admin', [UserController::class, 'logout'])->name('admin.logout');

    Route::get('/depots', [DepotController::class, 'index'])->name('admin.depots');
    Route::post('/depots', [DepotController::class, 'store'])->name('admin.store_depot');
    Route::get('/depots/{id}', [DepotController::class, 'show'])->name('admin.show_depot');
    Route::get('/depots/{id}/edit', [DepotController::class, 'edit'])->name('admin.edit_depot');
    Route::put('/depots/{id}', [DepotController::class, 'update'])->name('admin.update_depot');
    Route::delete('/depots/{id}', [DepotController::class, 'destroy'])->name('admin.destroy_depot');
});
Route::post('/contact/traitement',[ProductController::class,'contact'])->name('contact');
Route::middleware(['auth'])->group(function () {
    
    /*Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->middleware('role:0');

    */
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');
        Route::post('/confirmer-investissement', [ProductController::class, 'confirmerInvestissement'])->name('confirmerInvestissement');


});

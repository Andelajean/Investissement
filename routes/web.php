<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\RetraiController;
use App\Http\Controllers\AdminController\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Investissement;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('site.index');
});

Route::get('/help', function () {
    return view('site.help'); // Affiche la page about.blade.php
});

Route::get('/contact', function () {
    return view('site.contact'); // Affiche la page about.blade.php
});

Route::get('/dashboard', function () {
    $investissementsActifs = Investissement::where('id_user', auth()->id())
    ->where('statut', 'actif')
    ->get(); // Renvoie une Collection vide si aucun résultat

// Debug : Assure-toi que c'est une collection
if (!$investissementsActifs instanceof \Illuminate\Support\Collection) {
    dd('Erreur : $investissementsActifs doit être une collection', $investissementsActifs);
}

return view('dashboard', [
    'investissementsActifs' => $investissementsActifs
]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users/produit-list',[ProductController::class,'produit'])->name('produit.list');
    Route::post('/confirmer-investissement', [ProductController::class, 'confirmerInvestissement'])->name('confirmerInvestissement');
    Route::post('/validate-depot', [DepotController::class, 'validerDepot'])->name('valider.depot');
   // Route::get('/investissement/actif', [RetraiController::class, 'checkInvestissementActif']);
    Route::post('/check-investissement-actif', [RetraiController::class, 'checkInvestissementActif']);
    Route::get('/retrait', [RetraiController::class, 'retraitPage'])->name('retrait');


Route::post('/paiement/investissement', [RetraiController::class, 'storeRetrait'])->name('payement.retrait');
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


    Route::get('/depots', [DepotController::class, 'index'])->name('admin.depots');
    Route::post('/depots', [DepotController::class, 'store'])->name('admin.store_depot');
    Route::get('/depots/{id}', [DepotController::class, 'show'])->name('admin.show_depot');
    Route::get('/depots/{id}/edit', [DepotController::class, 'edit'])->name('admin.edit_depot');
    Route::put('/depots/{id}', [DepotController::class, 'update'])->name('admin.update_depot');
    Route::delete('/depots/{id}', [DepotController::class, 'destroy'])->name('admin.destroy_depot');
});
Route::post('/confirmer-investissement', [ProductController::class, 'confirmerInvestissement'])->name('confirmerInvestissement');



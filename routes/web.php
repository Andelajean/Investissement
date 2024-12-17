<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\RetraiController;
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

Route::get('/', function () {
    return view('welcome');
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
Route::post('/confirmer-investissement', [ProductController::class, 'confirmerInvestissement'])->name('confirmerInvestissement');


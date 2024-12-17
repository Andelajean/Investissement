<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users/produit-list',[ProductController::class,'produit'])->name('produit.list');
});

require __DIR__.'/auth.php';












































































































Route::get('/users/produit-list',[ProductController::class,'produit'])->name('produit.list');



/////***** ADMIN ROUTE******/////
use App\Http\Controllers\AdminController\AdminController;

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/recherche', [AdminController::class, 'rechercherClient'])->name('admin.recherche');
Route::get('/admin/etat-transaction/{id}', [AdminController::class, 'etatTransaction'])->name('admin.etatTransaction');
Route::post('/admin/changer-statut-transaction/{id}', [AdminController::class, 'changerStatutTransaction'])->name('admin.changerStatutTransaction');
Route::get('/admin/etat_transaction/all/retrait', [AdminController::class, 'ShowAllRetrait'])->name('admin.transaction_retrait');
Route::get('/admin/etat_transaction/all', [AdminController::class, 'ShowAllTransaction'])->name('admin.transaction_all');

Route::get('/pay/success', [\App\Http\Controllers\PaiementController::class, 'callback'])->name('payment.success');
Route::post('/pay/notify', [\App\Http\Controllers\PaiementController::class, 'notify'])->name('payment.notify');
Route::get('/return_url', [\App\Http\Controllers\PaiementController::class, 'return_url'])->name('return_url');
Route::post('/payement/investissement', [\App\Http\Controllers\PaiementController::class, 'payment'])->name('paiement');


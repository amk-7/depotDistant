<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//========================== Produit ============================//
Route::resource('produit', \App\Http\Controllers\ProduitController::class);

//========================== employe ============================//
Route::get('liste_des_employes', [\App\Http\Controllers\EmployeController::class, 'index'])->name('listeEmployes');

Route::get('formulaire_creation_employe', [EmployeController::class, 'create'])->name('formulaireCreationEmploye');

Route::get('modification_employe/{employe}/modifier', [EmployeController::class, 'edit'])->name('modificationEmploye');

Route::post('enregistrement_employe', [EmployeController::class, 'store'])->name('enregistrementEmploye');

Route::post('modification_employe/{employe}', [EmployeController::class, 'update'])->name('modificationEmploye');

Route::post('suppression_employe/{employe}', [EmployeController::class, 'destroy'])->name('suppressionEmploye');

//========================== client ============================//
Route::get('liste_des_clients', [\App\Http\Controllers\ClientController::class, 'index'])->name('listeClients');

Route::get('formulaire_creation_client', [ClientController::class, 'create'])->name('formulaireCreationClient');

Route::get('modification_client/{client}/modifier', [EmployeController::class, 'edit'])->name('modificationClient');

Route::post('enregistrement_client', [EmployeController::class, 'store'])->name('enregistrementClient');

Route::post('modification_client/{client}', [EmployeController::class, 'update'])->name('modificationClient');

Route::post('suppression_client/{client}', [EmployeController::class, 'destroy'])->name('suppressionClient');


require __DIR__.'/auth.php';


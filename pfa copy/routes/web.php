<?php
use App\Http\Controllers\ImmobilierController;
use App\Http\Controllers\ImmobilierAcheterController;
use App\Http\Controllers\ImmobilierLouerController;
use Illuminate\Support\Facades\Route;

// Route pour afficher la liste des incidents
Route::get('/immobilier_vendre', [ImmobilierController::class, 'index'])->name('vendre.index');

// Route pour afficher le formulaire de création d'un nouvel incident
Route::get('/immobilier_vendre/create', [ImmobilierController::class, 'create'])->name('vendre.create');

// Route pour stocker les données du formulaire de création d'un nouvel incident
Route::post('/immobilier_vendre', [ImmobilierController::class, 'store'])->name('vendre.store');

// Route pour afficher les détails d'un incident spécifique
Route::get('/immobilier_vendre/{id}', [ImmobilierController::class, 'show'])->name('vendre.show');

// Route pour afficher le formulaire d'édition d'un incident existant
Route::get('/immobilier_vendre/{id}/edit', [ImmobilierController::class, 'edit'])->name('vendre.edit');

// Route pour mettre à jour les données d'un incident existant
Route::put('/immobilier_vendre/{id}', [ImmobilierController::class, 'update'])->name('vendre.update');

// Route pour supprimer un incident existant
Route::delete('/immobilier_vendre/{id}', [ImmobilierController::class, 'destroy'])->name('vendre.destroy');


Route::get('/immobilier_acheters', [ImmobilierAcheterController::class, 'index'])->name('acheter.index');
Route::get('/immobilier_acheters/{id}', [ImmobilierAcheterController::class, 'show'])->name('acheter.show');

Route::get('/immobilier_louers', [ImmobilierLouerController::class, 'index'])->name('louer.index');

// Route pour afficher le formulaire de création d'un nouvel incident
Route::get('/immobilier_louers/create', [ImmobilierLouerController::class, 'create'])->name('louer.create');

// Route pour stocker les données du formulaire de création d'un nouvel incident
Route::post('/immobilier_louers', [ImmobilierLouerController::class, 'store'])->name('louer.store');

// Route pour afficher les détails d'un incident spécifique
Route::get('/immobilier_louers/{id}', [ImmobilierLouerController::class, 'show'])->name('louer.show');

// Route pour afficher le formulaire d'édition d'un incident existant
Route::get('/immobilier_louers/{id}/edit', [ImmobilierLouerController::class, 'edit'])->name('louer.edit');

// Route pour mettre à jour les données d'un incident existant
Route::put('/immobilier_louers/{id}', [ImmobilierLouerController::class, 'update'])->name('louer.update');

// Route pour supprimer un incident existant
Route::delete('/immobilier_louers/{id}', [ImmobilierLouerController::class, 'destroy'])->name('louer.destroy');

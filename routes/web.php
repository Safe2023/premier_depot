<?php

use App\Http\Controllers\ProduitController;
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
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/ajouterproduit',[ProduitController::class, 'create']);
Route::post('/ajouterproduit',[ProduitController::class, 'store'])->name('ajouterproduit');
Route::get('/listeproduit',[ProduitController::class, 'listeproduit'])->name('listeproduit');
Route::get('/tableau',[ProduitController::class, 'tableau'])->name('tableau');
Route::get('/modifier/{id}',[ProduitController::class, 'edit'])->name('edit');
Route::post('/modifier/{id}',[ProduitController::class, 'update'])->name('update');
Route::get('/delete/{id}',[ProduitController::class, 'destroy'])->name('delete');
Route::get('/ajoutercategorie',[ProduitController::class, 'create_category'])->name('create_category');
Route::post('/ajoutercategorie',[ProduitController::class, 'ajoutercategoerie'])->name('ajouter_categorie');
 Route::post('/contact',[ProduitController::class, 'envoiedemail'])->name('envoie.email');
 


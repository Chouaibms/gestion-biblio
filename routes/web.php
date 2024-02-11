<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliothequeController;

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
Route::get('/livres/recherche/{id_auteur?}', [BibliothequeController::class, 'Rechercher'])->name('livres.recherche');
Route::get('/livres/editer/{livre}', [BibliothequeController::class, 'Editer'])->name('livres.editer');
Route::put('/livres/modifier/{livre}', [BibliothequeController::class, 'Modifier'])->name('livres.modifier');

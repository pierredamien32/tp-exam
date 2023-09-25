<?php

use App\Http\Controllers\InscriptionController;
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
    return view('indexDEC');
});

Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription');
Route::post('/inscription/store', [InscriptionController::class, 'store'])->name('inscription.store');
Route::get('/recherche', [InscriptionController::class, 'recherche'])->name('recherche');
Route::get('/info', [InscriptionController::class, 'info'])->name('info');
Route::get('/menu', [InscriptionController::class, 'menu'])->name('menu');

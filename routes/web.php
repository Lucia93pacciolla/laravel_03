<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [PublicController::class, 
'homepage'] )->name('homepage');


Route::get('articoli', [ArticlesController::class,
'articoli'])->name('articles');

Route::get('articoli/dettaglio/{id}', [ArticlesController::class,
'show'])->name('dettaglio.articoli');
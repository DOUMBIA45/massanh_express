<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomePageController;

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

Route::get('/', [HomePageController::class, 'HomePage'])->name('HomePage');
Route::get('/actualite', [HomePageController::class, 'actualite'])->name('actualite');
Route::get('/equipe', [HomePageController::class, 'equipe'])->name('equipe');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');



Route::get('/listeProduits', [ProduitController::class, 'listeProduits'])->name('listeProduits');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

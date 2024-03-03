<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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
Route::get('/about', [HomePageController::class, 'about'])->name('about');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');

Route::get('/travaux', [HomePageController::class, 'travaux'])->name('travaux');


Route::get('/services', [HomePageController::class, 'services'])->name('services');
Route::get('/demande_services', [HomePageController::class, 'demande_services'])->name('demande_services');



Route::get('/listeProduits', [ProduitController::class, 'listeProduits'])->name('listeProduits');


Route::post('authLogin',[LoginController::class,'authLogin'])->name('authLogin');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

require __DIR__.'/admin/route.php';

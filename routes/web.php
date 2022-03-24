<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\ContactController;

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
//####################################################################################################
// LES ROUTES DE BASE POUR TOUS UTILISATUERS
//####################################################################################################
Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/series', [SeriesController::class, 'index'])->name('seriesPage');
Route::get('/series/{url}', [SeriesController::class, 'show'])->name('singleSeriePage');
Route::get('/contact', [ContactController::class, 'index'])->name('contactPage');
Route::post('/contact', [ContactController::class, 'contactForm']);

//####################################################################################################
// LES ROUTES DE GESTION DES SUBSCRIBERS
//####################################################################################################


//####################################################################################################
// LES ROUTES DE L'ADMIN
//####################################################################################################
Route::resource('admin/series', SeriesController::class);

//####################################################################################################
// LES ROUTES DE AUTHENTIFICATION
//####################################################################################################
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

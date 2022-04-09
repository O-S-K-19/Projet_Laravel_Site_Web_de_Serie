<?php

use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


// -------------- LES ROUTES POUR TOUS UTILISATUERS------------------------------------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/series', [SeriesController::class, 'index'])->name('seriesPage');
Route::get('/series/{url}', [SeriesController::class, 'show'])->name('singleSeriePage');
Route::get('/contact', [ContactController::class, 'index'])->name('contactPage');
Route::post('/contact', [ContactController::class, 'store'])->name('contactStore');



// -------------- LES ROUTES DE GESTION DES SUBSCRIBERS ------------------------------------------------------------------------------------------------

Route::post('/serie', [SeriesController::class, 'getComment']);



// -------------- LES ROUTES DE SUBSCRIBER -----------------------------------------------------------------------------------------------------------------

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboards.subscriber');
})->name('dashboard');



// -------------- LES ROUTES DE PRODUCER -----------------------------------------------------------------------------------------------------------------

Route::middleware(['auth:sanctum', 'verified'])->get('/producer/dashboard', function () {
    return view('dashboards.producer');
})->name('producerDashboard');



// -------------- LES ROUTES DE L'ADMIN -----------------------------------------------------------------------------------------------------------------

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
    return view('dashboards.admin');
})->name('adminDashboard');
Route::resource('admin/series', SeriesController::class);

Route::get('admin', [AdminController::class, 'index'])->name('adminPage');
Route::get('admin/users', [AdminController::class, 'show'])->name('manageUsersPage');
Route::get('admin/series', [AdminController::class, 'show'])->name('manageSeriesPage');
Route::get('admin/comments', [AdminController::class, 'show'])->name('manageCommentsPage');
Route::get('admin/contacts', [AdminController::class, 'show'])->name('manageContactsPage');







// -------------- LES ROUTES POUR LA GESTION DES MEDIAS -------------------------------------------------------------------------------------------------

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
    Lfm::routes();
});







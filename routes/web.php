<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoritesController;

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
Route::post('/comments', [CommentController::class, 'index'])->name('commentIndex');
Route::post('/comments', [CommentController::class, 'store'])->name('commentStore');

// -------------- LES ROUTES POUR LA CONNEXION GOOGLE ------------------------------------------------------------------------------------------------
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


// -------------- LES ROUTES DE GESTION DES SUBSCRIBERS ------------------------------------------------------------------------------------------------

Route::post('/serie', [SeriesController::class, 'getComment']);




// -------------- LES ROUTES D'AUTHENTIFICATIONS -----------------------------------------------------------------------------------------------------------------

    Route::middleware('auth')->group(function(){

        Route::resource('/favorites', FavoritesController::class);
        Route::resource('/upload', FilesController::class);

        // -------------- LES ROUTES DE L'ADMIN -----------------------------------------------------------------------------------------------------------------

        Route::prefix('admin')->group(function () {
            // les routes de ressources
            Route::resource('/series', SeriesController::class);
            Route::resource('/users', UsersController::class);
            Route::resource('/contacts', ContactController::class);
            Route::resource('/comments', CommentController::class);

            // les routes de gestion
            Route::get('', [AdminController::class, 'index'])->name('adminPage');
            Route::get('/users', [AdminController::class, 'show'])->name('manageUsersPage');
            Route::get('/series', [AdminController::class, 'show'])->name('manageSeriesPage');
            Route::get('/comments', [AdminController::class, 'show'])->name('manageCommentsPage');
            Route::get('/contacts', [AdminController::class, 'show'])->name('manageContactsPage');


        });

        // -------------- LES ROUTES DE PRODUCER -----------------------------------------------------------------------------------------------------------------


        Route::prefix('producer')->group(function () {
            Route::get('', [AdminController::class, 'index'])->name('adminPage');
            Route::resource('/series', SeriesController::class);
            Route::resource('/comments', CommentController::class);
            Route::get('/series', [AdminController::class, 'show'])->name('manageSeriesPage');
            Route::get('/comments', [AdminController::class, 'show'])->name('manageCommentsPage');

        });

        // -------------- LES ROUTES DE SUBSCRIBER -----------------------------------------------------------------------------------------------------------------


    });


// -------------- LES ROUTES POUR LA GESTION DES MEDIAS -------------------------------------------------------------------------------------------------

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
    Lfm::routes();
});







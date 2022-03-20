<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Homepage
Route::get('/', 'PageController@index')->name('homepage');

// Rotte gestione autenticazione
Auth::routes();

// Rotte area admin
Route::prefix('admin'
    )->namespace('Admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function() {
        // Homepage
        Route::get('/', 'HomeController@index')->name('home');
        // Crud
        Route::resource('tvs', 'TvController');
    });
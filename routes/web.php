<?php

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

/* Routes */

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Test Page
Route::get('/test', function () {
    return view('test');
});

/* Auth */
Auth::routes();

// Home Page
Route::get('/home', 'HomeController@index')->name('home');

/* Protect Auth */
Route::group(['middleware' => ['auth']], function () {
    // Profil
    Route::get('profil','ProfilController@index')->name('profil');

});

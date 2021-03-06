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
Route::get('/', 'WelcomeController@index')->name('welcome');

// Home Page
Route::get('/home', 'HomeController@index')->name('home');

// About Page
Route::get('/about', function () {
    return view('Page.about');
});

// Test Page
Route::get('/test', function () {
    return view('Page.test');
});

/* Auth */
Auth::routes();

/* Protect Auth */
Route::group(['middleware' => ['auth']], function () {
    
    // Profil
    Route::get('profil','ProfilController@index')->name('profil');

    // Edit Account
    Route::get('account', 'ProfilController@edit_account')->name('account.edit');
    Route::put('account/update-info/{id}', 'ProfilController@update_info')->name('account.updateInfo');
    Route::put('account/update-ava/{id}', 'ProfilController@update_ava')->name('account.updateAva');
    Route::put('account/delete-ava/{id}', 'ProfilController@delete_ava')->name('account.deleteAva');

    // Change Password
    Route::get('password', 'PasswordController@index')->name('password.index');
    Route::put('password', 'PasswordController@update')->name('password.update');

    // Post
    Route::post('publish', 'PostController@store')->name('publish.store');

    // Post Detail
    Route::get('post-detail', 'PostController@postDetail')->name('post.detail');

    // Suggest User
    Route::get('suggest-user', 'SuggestController@index')->name('suggest.user');

    // Profil User
    Route::get('profil-user', 'ProfilController@profil_user')->name('profil.user');
});

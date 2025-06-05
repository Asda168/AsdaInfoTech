<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/sign_in', 'SignController@index')->name('sign_in');

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', function () {
    $user = Socialite::driver('google')->user();

    // You can now log in or register the user
    // Example:
    // Auth::login($findOrCreateUser($user));

    return redirect('/home');
});



Route::get('/auth/github', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/github/callback', function () {
    $user = Socialite::driver('github')->user();

    // Handle login or registration logic here
});

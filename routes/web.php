<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookSocialiteController;
use App\Http\Controllers\Auth\SocialiteController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 
// Google URL
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redirectToGoogle');

Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');


// // Facebook
// Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
// Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);


Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

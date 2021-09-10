<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\URL;

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
    return view('home');
});

//home
Route::get('/', [HomeController::class,'index']);

//Article
Route::get('/Article', [ArticleController::class,'index']);
Route::get('/Article/detail/{slug}', [ArticleController::class,'detail']);

//Article
Route::get('/Videos', [VideoController::class,'index']);
Route::get('/Videos/detail/{slug}', [VideoController::class,'detail']);

//Google Login URL
Route::get('/auth/google/redirect', [GoogleController::class, 'handleGoogleRedirect']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//Facebook Login URL
Route::get('/auth/facebook/redirect', [FacebookController::class, 'handleFacebookRedirect']);
Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);


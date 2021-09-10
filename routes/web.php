<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VideoController;

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

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    Auth::logout();
    return redirect ('/index');
});

//Route::get('/', 'App\Http\Controllers\RouteController@welcome');

Route::get('/index', 'App\Http\Controllers\RouteController@index');
Route::get('/main', 'App\Http\Controllers\ArticlesController@mainRead');
Route::get('/postSymp', 'App\Http\Controllers\RouteController@postSymp');

Auth::routes();

Route::get('/home', [App\Http\Controllers\ArticlesController::class, 'index'])->name('home');

Route::resource('articles', 'App\Http\Controllers\ArticlesController');

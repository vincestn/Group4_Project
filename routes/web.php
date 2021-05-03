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
Route::get('/create', function () {
    return view('layouts.createArticle');
});

Route::get('/admin', function () {
    return view('layouts.adminMain');
});

Route::get('/', function() {
    Auth::logout();
    return redirect ('/index');
});

//Route::get('/', 'App\Http\Controllers\RouteController@welcome');

Route::get('/index', 'App\Http\Controllers\RouteController@index');

Route::get('/main', 'App\Http\Controllers\RouteController@main');

Route::get('/postLN1', 'App\Http\Controllers\RouteController@postLN1');

Route::get('/postLN2', 'App\Http\Controllers\RouteController@postLN2');

Route::get('/postIN1', 'App\Http\Controllers\RouteController@postIN1');

Route::get('/postIN2', 'App\Http\Controllers\RouteController@postIN2');

Route::get('/postSymp', 'App\Http\Controllers\RouteController@postSymp');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

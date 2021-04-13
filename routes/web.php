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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/post1', function () {
    return view('post1');
});

Route::get('/postLN1', function () {
    return view('postLN1');
});

Route::get('/postLN2', function () {
    return view('postLN2');
});

Route::get('/postIN1', function () {
    return view('postIN1');
});

Route::get('/postIN2', function () {
    return view('postIN2');
});

Route::get('/postSymp', function () {
    return view('postSymp');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    return view('home');
});

Route::get('/', function () {
    return view('chi_siamo');
});

Route::get('/', function () {
    return view('sito_web');
});

Route::get('/', function () {
    return view('contatti');
}); 

Route::get('/', function () {
    return view('altro');
});

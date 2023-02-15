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
    $data = [
        'word' => 'Benvenuti nella mia Home',
    ];

    return view('home', $data);
})->name('home');

Route::get('chi_siamo', function () {
    $dati = [
        'siamo' => 'Chi Siamo!',
        'group' => 'Un Gruppo di Amici Frilance'
    ];

    return view('chi_siamo',$dati);
})->name('chi_siamo');

Route::get('sito_web', function () {
    return view('sito_web');
});

Route::get('contatti', function () {
    return view('contatti');
}); 

Route::get('altro', function () {
    return view('altro');
});

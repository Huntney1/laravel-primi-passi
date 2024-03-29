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

# HOME
Route::get('/', function () {
    $data = [
        'word' => 'Benvenuti nella mia Home',
    ];

    return view('home', $data);
})->name('home');

# CHI SIAMO
Route::get('chi_siamo', function () {
    $dati = [
        'siamo' => 'Chi Siamo!',
        'group' => 'Un Gruppo di Amici Frilance'
    ];

    return view('chi_siamo',$dati);
})->name('chi_siamo');

# CONTATTI
Route::get('contatti', function () {
    $data = [
        'benve' => 'Benvenuto nella Pagina Dei',
        'cont' => 'Contatti!'
    ];


    return view('contatti',$data);
}); 

# SITO WEB
Route::get('sito_web', function () {

    $data = [
        'ben' => 'Benvenuto nella Pagina dei',
        'web' => 'Siti Web!'
    ];

    return view('sito_web',$data);
});

# ALTRO
Route::get('altro', function () {

    $data = [
        'benv' => 'Benvenuto nella Pagina',
        'altr' => 'Altro!'
    ];
    
    return view('altro',$data);
});

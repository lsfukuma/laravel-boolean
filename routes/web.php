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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/corso', function () {
    return view('corso');
});

Route::get('/carriere', function () {
    return view('dopo_il_corso');
});

Route::get('/lezione_gratuita', function () {
    return view('lezione_gratuita');
});

Route::get('/aziende', function () {
    return view('assumi');
});

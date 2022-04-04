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

Route::get('/', function () {
    return view('principal');
})->name('p');

Route::get('/Mapas', function () {
    return view('mapas');
})->name('mp');

Route::get('/Agentes', function () {
    return view('agentes');
})->name('ag');

Route::get('/Armas', function () {
    return view('armas');
})->name('ar');
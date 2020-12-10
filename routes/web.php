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

Route::view('/', 'welcome');

Route::view('/galerija', 'gallery');

Route::prefix('usluge')->group(function () {
    Route::view('konfekcija', 'usluge.konfekcija');
    Route::view('profesionalni-kupci', 'usluge.profesionalni');
    Route::view('jambo-rolne', 'usluge.jambo');
});

Route::prefix('proizvodi')->group(function () {
    Route::view('aluminijumska-folija', 'proizvodi.alu-foil');
    Route::view('aluminijumske-posude', 'proizvodi.alu-pos');
    Route::view('papir-za-pecenje', 'proizvodi.pap-pec');
    Route::view('papir-u-tabacima', 'proizvodi.pap-tab');
    Route::view('prijanjajuca-foilja', 'proizvodi.pri-foil');
    Route::view('zica-za-sudove', 'proizvodi.zic-sud');
});

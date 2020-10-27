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

Route::get('konfekcija', function () {
    return view('usluge.konfekcija');
});
Route::get('profesionalni-kupci', function () {
    return view('usluge.profesionalni');
});
Route::get('jambo-rolne', function () {
    return view('usluge.jambo');
});

Route::get('aluminijumska-folija', function () {
    return view('proizvodi.alu-foil');
});
Route::get('aluminijumske-posude', function () {
    return view('proizvodi.alu-pos');
});
Route::get('papir-za-pecenje', function () {
    return view('proizvodi.pap-pec');
});
Route::get('papir-u-tabacima', function () {
    return view('proizvodi.pap-tab');
});
Route::get('prijanjajuca-foilja', function () {
    return view('proizvodi.pri-foil');
});
Route::get('pvc-folija', function () {
    return view('proizvodi.pvc-foil');
});
Route::get('zica-za-sudove', function () {
    return view('proizvodi.zic-sud');
});

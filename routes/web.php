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

Route::get('aluminijumska-folija', function () {
    return view('alu-foil');
});
Route::get('aluminijumske-posude', function () {
    return view('alu-pos');
});
Route::get('papir-za-pecenje', function () {
    return view('pap-pec');
});
Route::get('papir-u-tabacima', function () {
    return view('pap-tab');
});
Route::get('prijanjajuca-foilja', function () {
    return view('pri-foil');
});
Route::get('pvc-folija', function () {
    return view('pvc-foil');
});
Route::get('zica-za-sudove', function () {
    return view('zic-sud');
});

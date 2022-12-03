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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/rumahsakit', function () {
    return view('rumahsakit', [
        "title" => "Rumah Sakit"
    ]);
});

Route::get('/dokter', function () {
    return view('dokter', [
        "title" => "Dokter"
    ]);
});

Route::get('/rawatinap', function () {
    return view('rawatinap', [
        "title" => "Rawat Inap"
    ]);
});
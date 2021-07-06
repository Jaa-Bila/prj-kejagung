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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/perkara', function () {
    return view('perkara');
})->name('perkara');

Route::middleware(['auth:sanctum', 'verified'])->get('/pegawai', function () {
    return view('pegawai');
})->name('pegawai');

Route::middleware(['auth:sanctum', 'verified'])->get('/datamaster', function () {
    return view('datamaster');
})->name('datamaster');

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

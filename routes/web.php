<?php

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

use App\Spalva;

Route::get('/', function () {
	$spalva = Spalva::first();
    return view('pradzia', compact('spalva'));
});

Route::get('/apiemus', function () {
    return view('apiemus');
});

Route::get('/kontaktai', function () {
    return view('kontaktai');
});

Route::get('/automobiliai', function () {
    return view('automobiliai');
});

Route::get('/automobilis', function () {
    return view('automobilis');
});

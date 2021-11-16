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
    return view('home');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/duvidas', function () {
    return view('duvidas');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/interna', function () {
    return view('bloginterna');
});

Route::get('/anuncie', function () {
    return view('anuncie');
});
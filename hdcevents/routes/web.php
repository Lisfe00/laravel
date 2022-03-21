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

    $nome = "Luis";

    return view('welcome', ['nome' => $nome]);
});

Route::get('/controle', function () {

    $nome = "Luis";

    return view('controle', ['nome' => $nome]);
});

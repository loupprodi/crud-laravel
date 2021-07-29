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

Route::get(
    '/',
    "CustomersController@cadastrar"
);

Route::get(
    '/editar',
    "CustomersController@editar"
);

Route::get(
    '/listar',
    "CustomersController@listar"
);
Route::get(
    '/visualizar',
    "CustomersController@visualizar"
);

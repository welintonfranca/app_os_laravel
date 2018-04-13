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

Route::get('/', function () {
    return view('principal');
});

Route::get('/ordem/pesquisar', 'AbertaController@pesquisar')->middleware('auth');
Route::post('/ordem/pesquisar', 'AbertaController@pesquisar')->middleware('auth');
Route::get('/ordem/inserir', 'AbertaController@mostrar_inserir')->middleware('auth');
Route::post('/ordem/inserir', 'AbertaController@inserir')->middleware('auth');
Route::get('/ordem/alterar/{id}', 'AbertaController@mostrar_alterar')->middleware('auth');
Route::post('/ordem/alterar', 'AbertaController@alterar')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;

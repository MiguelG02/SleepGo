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

//Route::get('/public', 'PublicController@index');

//Route::get('/admin', 'AdminController@index');

Auth::routes();

Route::get('/aboutus', 'PublicController@aboutus');

Route::get('/nossosquartos', 'PublicController@nossosquartos');

Route::resource('/', 'PublicController');

//Route::get('public.show', 'PublicController@show');

Route::get('/home', 'HomeController@index');

Route::get('/minhasreservas', 'HomeController@minhasreservas');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('home', 'HomeController');
    Route::get('home/reservar/{id}','HomeController@reservar');
    //Route::get('/reservar','HomeController@reservar');
    //Route::get('/ver','HomeController@show');
    Route::get('/semacesso', 'Democontroller@semAcesso');
    Route::group(['middleware' => ['admin']], function () {
        Route::resource('admin', 'AdminController');
        Route::delete('/reservas/{id}', 'AdminController@apagar');
        Route::get('/confirmacao/{id}', 'AdminController@confirmacao');
        Route::get('/reservas', 'AdminController@reservas');
        Route::resource('Localizacoes','LocalizacoesController');
        Route::resource('Descricoes','DescricoesController');
        Route::resource('Quartos','QuartoController');
        Route::resource('Tipos','TipoController');
        Route::resource('reservas','ReservasController');
        Route::get('/confirmadas','ReservasController@confirmadas');
    });
});

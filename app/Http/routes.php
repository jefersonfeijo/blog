<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'NoticiasController@brasil', 'as' => 'noticias.brasil' ]);

Route::auth();

Route::get('/home', 'HomeController@index');

//Notícias
Route::get('/brasil', 	['uses'=>'NoticiasController@brasil', 'as'=>'noticias.brasil']);
Route::get('/politica', ['uses'=>'NoticiasController@politica', 'as'=>'noticias.politica']);
Route::get('/economia', ['uses'=>'NoticiasController@economia', 'as' =>'noticias.economia']);

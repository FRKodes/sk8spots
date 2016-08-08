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

Route::get('/', function () {
	Auth::loginUsingId(1);
    return view('pages.index');
});

Route::get('acerca-de', function () {
    return view('pages.acerca-de');
});

Route::get('contacto', function () {
    return view('pages.contacto');
});

Route::auth();

Route::get('/home', 'HomeController@index');

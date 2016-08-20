<?php

Route::get('/', 'PagesController@index');
Route::get('acerca-de', 'PagesController@acercade');
Route::get('contacto', 'PagesController@contacto');
Route::resource('spot', 'SpotController');

Route::get('admin', 'AdminController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
<?php

Route::get('/', 'PagesController@index');
Route::get('acerca-de', 'PagesController@acercade');
Route::get('contacto', 'PagesController@contacto');
Route::resource('spot', 'SpotController');

Route::get('perfil', 'ProfileController@index');

Route::get('admin', 'AdminController@index');
Route::get('admin/users','AdminController@users');
Route::get('admin/user/{id}','AdminController@user');
Route::get('admin/spots','AdminController@spots');
Route::get('admin/spot/{id}','AdminController@spot');

Route::auth();

Route::get('/home', 'HomeController@index');
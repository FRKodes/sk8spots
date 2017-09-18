<?php

Route::get('/', 'PagesController@index');
Route::get('acerca-de', 'PagesController@acercade');
Route::get('contacto', 'PagesController@contacto');
Route::post('send_contact_mail', 'PagesController@sendContactMail');
Route::resource('spot', 'SpotController');
Route::get('spot/{slug}', 'SpotController@show');

Route::get('api/getspots', 'ApiController@getSpots');

Route::get('perfil', 'ProfileController@index');

Route::get('admin', 'AdminController@index');
Route::get('admin/users','AdminController@users');
Route::get('admin/user/{id}','AdminController@user');
Route::get('admin/spots','AdminController@spots');
Route::get('admin/spot/{id}','AdminController@spot');
Route::get('admin/spot/{id}/edit','AdminController@editspot');
Route::patch('admin/spot/{id}','AdminController@updatespot');

Route::auth();

Route::get('/home', 'HomeController@index');
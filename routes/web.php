<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@index')->name('post');
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/ferramentas', 'FerramentasController@index')->name('ferramentas');

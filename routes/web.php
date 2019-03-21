<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@index')->name('post');
Route::get('/ferramentas', 'FerramentasController@index')->name('ferramentas');

Auth::routes();

<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/documents','DocumentController');
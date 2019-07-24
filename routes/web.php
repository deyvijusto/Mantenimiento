<?php

Route::get('/', 'TesController@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

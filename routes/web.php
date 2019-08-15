<?php

Route::resource('ckediter','CkediterController');
Route::resource('from','FromController');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

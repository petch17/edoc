<?php

Route::resource('inbox','InboxController');
Route::resource('form','FormController');
Route::resource('send','SendController');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
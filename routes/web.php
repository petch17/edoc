<?php

Route::get('inbox/add', 'InboxController@add')->name('add');
Route::resource('inbox','InboxController');


Route::resource('sent','SentController');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

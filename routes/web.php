<?php

Route::get('inbox/add', 'InboxController@addcreate')->name('addcreate');
Route::post('inbox/addstore', 'InboxController@addstore')->name('addstore');
Route::resource('inbox','InboxController');


Route::resource('sent','SentController');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

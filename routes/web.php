<?php

Route::get('inbox/addcreate', 'InboxController@addcreate')->name('addcreate');
// Route::get('inbox/add', 'InboxController@addstore')->name('addstore');
Route::resource('inbox','InboxController');


Route::resource('sent','SentController');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

Route::get('inbox/add', 'InboxController@add')->name('add');
Route::resource('inbox','InboxController');
Route::resource('form','FormController');
Route::resource('sent','SentController');
Route::resource('form2','Form2Controller');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

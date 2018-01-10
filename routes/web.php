<?php

Route::get('/', function () {
    return view('layouts.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

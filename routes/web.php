<?php
Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

// products routes
Route::get('/products', 'ProductController@index')->name('product.index');

// backoffices routes
Route::get('/admin', 'BackofficeController@index')->name('admin.index');

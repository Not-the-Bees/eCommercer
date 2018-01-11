<?php
Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

// products routes
Route::get('/products', 'ProductController@index')->name('product.index');

// backoffices routes
Route::get('/admin', 'BackofficeController@index')->name('admin.index');
Route::get('/admin/product/create', 'ProductController@create')->name('product.create');
Route::post('/admin/createProduct', 'ProductController@store')->name('product.store');
Route::post('/admin/createCategory', 'CategoryController@store')->name('category.store');



<?php
Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

// products routes
Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');


// backoffices routes
Route::get('/admin', 'BackofficeController@index')->name('admin.index');
Route::get('/admin/slideshow/create', 'BackofficeController@create')->name('slideshow.create');
Route::get('/admin/product/create', 'ProductController@create')->name('product.create');
Route::post('/admin/createProduct', 'ProductController@store')->name('product.store');
Route::post('/admin/createCategory', 'CategoryController@store')->name('category.store');

// contact us route
Route::get('/contact', 'ContactController@index')->name('contact.index');





<?php
Auth::routes();

Route::get('/', 'PagesController@home')->name('home');

// products routes
Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');


// backoffices routes
Route::get('/admin', 'BackofficeController@index')->name('admin.index');
// products
Route::get('/admin/product/create', 'ProductController@create')->name('product.create');
Route::post('/admin/createProduct', 'ProductController@store')->name('product.store');
Route::post('/admin/createCategory', 'CategoryController@store')->name('category.store');

// slide show routes
Route::get('/admin/slideshow', 'SlideController@index')->name('slide.index');
Route::post('/admin/slideshow/create', 'SlideController@store')->name('slide.store');

// content routes
Route::get('/admin/content', 'BackofficeController@content')->name('content.index');

// contact us route
Route::get('/contact', 'ContactController@index')->name('contact.index');





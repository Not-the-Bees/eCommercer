<?php
Auth::routes();

Route::get('/', 'PagesController@home')->name('home');
Route::get('/login', 'PagesController@login')->name('login');
Route::get('/register', 'PagesController@register')->name('register');

// products site
Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');


// backoffices routes
Route::get('/admin', 'BackofficeController@index')->name('admin.index');

// products backoffice
Route::get('/admin/productpage', 'ProductController@productpage')->name('product.page');
Route::get('/admin/product/createproduct', 'ProductController@create')->name('product.create');
Route::get('/admin/product/createcategory', 'CategoryController@index')->name('category.index');
Route::post('/admin/createProduct', 'ProductController@store')->name('product.store');
Route::post('/admin/createCategory', 'CategoryController@store')->name('category.store');

// Interface routes
Route::get('/admin/interface', 'SlideController@index')->name('interface.index');
Route::get('/admin/interface/slideshow', 'SlideController@show')->name('slide.show');
Route::post('/admin/interface/slideshow/create', 'SlideController@store')->name('slide.store');

// content routes
Route::get('/admin/content', 'BackofficeController@content')->name('content.index');

// contact us route
Route::get('/contact', 'ContactController@index')->name('contact.index');

//Messagerie
Route::get('/conversations', 'ConversationsController@index')->name('conversations');
Route::get('/conversations/{user}', 'ConversationsController@show')
    ->middleware('can:talkTo,user')
    ->name('conversations.show');
Route::post('/conversations/{user}', 'ConversationsController@store')->middleware('can:talkTo,user');
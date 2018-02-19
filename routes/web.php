<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * AUTH ROUTES
 */
Auth::routes();

/**
 * FRONT OFFICE ROUTES
 */
Route::get('/', 'Front\DefaultController@home')->name('home');
Route::get('/products', 'Front\ProductController@index')->name('product.index');
Route::get('/product/{product}', 'Front\ProductController@show')->name('product.show');
Route::get('/contact', 'Front\ContactController@index')->name('contact.index');


/**
 * BACK OFFICE ROUTES
 */
Route::get('/admin', 'Back\DefaultController@home')->name('admin.home');
Route::get('/admin/products', 'Back\ProductController@index')->name('admin.product.index');
Route::get('/admin/product/create', 'Back\ProductController@create')->name('admin.product.create');
Route::post('/admin/product/store', 'Back\ProductController@store')->name('admin.product.store');
Route::get('/admin/category', 'Back\CategoryController@index')->name('admin.category.index');
Route::post('/admin/category/store', 'Back\CategoryController@store')->name('admin.category.store');
Route::get('/admin/interface', 'Back\DefaultController@interfaceHome')->name('admin.interface.index');
Route::get('/admin/interface/slideshow', 'Back\SlideController@index')->name('admin.slide.index');
Route::post('/admin/interface/slideshow/store', 'Back\SlideController@store')->name('admin.slide.store');
Route::get('/admin/interface/content', 'Back\ContentController@index')->name('admin.content.index');

//Messagerie
Route::get('/conversations', 'Back\ConversationsController@index')->name('admin.conversations.index');
Route::get('/conversations/{user}', 'Back\ConversationsController@show')->middleware('can:talkTo,user')->name('admin.conversations.show');
Route::post('/conversations/{user}', 'Back\ConversationsController@store')->middleware('can:talkTo,user')->name('admin.conversations.store');
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ShopController@top')->name('top');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('home', 'UserController@home')->name('home');

Route::get('customer/select', 'CustomerController@select')->name('customer.select');

Route::get('customer/index', 'CustomerController@index')->name('customer.index');

Route::get('customer/result', 'CustomerController@result')->name('customer.result');

Route::get('customer/create', 'CustomerController@create')->name('customer.create');

Route::post('customer/store', 'CustomerController@store')->name('customer.store');

Route::get('customer/message', 'MessageController@index')->name('customer.showMessage');

Route::get('customer/message/create', 'MessageController@create')->name('customer.createMessage');

Route::post('customer/confirm', 'MessageController@confirm')->name('customer.confirmMessage');

Route::post('customer/store/message', 'MessageController@store')->name('customer.storeMessage');

Route::get('travel/create/{customer}', 'TravelController@create')->name('travel.create');

Route::post('travel/store', 'TravelController@store')->name('travel.store');

Route::get('travels', 'TravelController@index')->name('travel.index');

Route::get('travel/{travel}', 'TravelController@show')->name('travel.show');

Route::get('travel/{travel}/memo', 'TravelController@memo')->name('travel.memo');

Route::post('travel/{travel}/memo/store', 'TravelController@memoStore')->name('travel.memo.store');

Route::get('travel/{travel}/edit', 'TravelController@edit')->name('travel.edit');

Route::post('travel/{travel}/update', 'TravelController@update')->name('travel.update');

Route::delete('travel/{travel}/delete', 'TravelController@delete')->name('travel.delete');

Route::get('aggregate/search', 'TravelController@searchPeriod')->name('travel.searchPeriod');

Route::get('aggregate/results', 'TravelController@resultsPeriod')->name('travel.resultsPeriod');

Route::get('summary', 'TravelController@summary')->name('travel.summary');

Route::get('search', 'TravelController@search')->name('travel.search');

Route::get('results', 'TravelController@results')->name('travel.results');

Route::get('shops', 'ShopController@index')->name('shop.index');

Route::get('shop/{shop}', 'ShopController@show')->name('shop.show');

Route::get('shop/{shop}/edit', 'ShopController@edit')->name('shop.edit');

Route::post('shop/{shop}/update', 'ShopController@update')->name('shop.update');

Route::get('user', 'UserController@show')->name('user.show');

Route::get('user/edit', 'UserController@edit')->name('user.edit');

Route::post('user/update', 'UserController@update')->name('user.update');

Route::get('user/password/edit', 'UserController@passwordEdit')->name('user.passwordEdit');

Route::post('user/password/update', 'UserController@passwordUpdate')->name('user.passwordUpdate');

Route::get('task/{travel}/show', 'TaskController@show')->name('task.show');

Route::post('task/{travel}/store', 'TaskController@store')->name('task.store');

Route::post('task/{travel}/update', 'TaskController@update')->name('task.update');

Route::delete('task/{travel}/delete', 'TaskController@delete')->name('task.delete');

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

;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/training', 'HomeController@training')->name('training');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/admin', 'AdminController@admin')->name('admin');

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

Route::get('/about-us', 'HomeController@about')->name('about');

Route::get('/our-services', 'HomeController@services')->name('services');

Route::get('/our-logistics', 'HomeController@training')->name('training');

Route::get('/contact-us', 'HomeController@contact')->name('contact');

Route::post('/sent-mail', 'HomeController@mail')->name('sendmail');

Route::get('/success-mail', 'HomeController@success')->name('mailsuccess');

Route::get('/admin', 'AdminController@admin')->name('admin');

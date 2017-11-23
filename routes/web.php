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
Route::get('/', 'PageController@start');

Route::get('/project', 'PageController@project');

Route::get('/event', 'PageController@event');

Route::get('/about-us', 'PageController@aboutUs');

Route::get('/contact-us', 'PageController@contactUs');

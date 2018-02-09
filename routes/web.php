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

Route::get('/', function()
{
    return 'Hello World';
});


Route::any('{slug}', 'PagesController@page');

Route::any('/articles/{slug}', 'PagesController@article');

Route::any('/products/{slug}', 'PagesController@product');

Route::any('/events/{slug}', 'PagesController@event');
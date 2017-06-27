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
Route::match(['get','post'],'/','IndexController@execute')->name('home');

Route::match(['get','post'],'galleries/{category}/{point}','GalleryController@execute')
    ->name('gallery');

Route::match(['get','post'],'/','IndexController@execute')
    ->name('main menu');

Route::get('portfolio','PortfolioController@execute')->name('portfolio');

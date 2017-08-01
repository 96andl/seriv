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

Route::match(['get','post'],'wedding/{identify}',
    array('as' => 'weddings','uses' => 'WeddingsController@execute'))->where('identify' , '[1-9a-zA-Z_-]+');

Route::match(['get','post'],'love-story/{identify}',
    array('as' => 'love story','uses' => 'LoveStoryController@execute'))->where('identify' , '[1-9a-zA-Z_-]+');


Route::match(['get','post'], 'pictures/{identify}',
    array('as' => 'pictures','uses' => 'PicturesController@execute'))->where('identify' , '[1-9a-zA-Z_-]+');

Route::match(['get','post'],'video',['as'=>'video', 'uses' => 'VideoController@execute'])
    ->where('identify' , '[1-9a-zA-Z_-]+');

Route::match(['get','post'],'workshop-program',['as'=>'workshop program', 'uses' => 'WorkshopProgramController@execute'])
    ->where('identify' , '[1-9a-zA-Z_-]+');

Route::match(['get','post'],'contacts',['as' =>'contacts','uses'=>'ContactsController@execute'])
    ->where('identify' , '[1-9a-zA-Z_-]+');


Route::get('instagram/getJson', function () {
    $CONTENT = file_get_contents("https://www.instagram.com/andriibashuk/media/");
    return response()->json($CONTENT,200);
});
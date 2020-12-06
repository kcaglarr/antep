<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.index-master');
});

Route::get('/hakkimda' , 'HomeController@showView');


/**
 * Product İşlemleri
 */
Route::get('/create-product' , 'ProductController@create')->name('product.create');
Route::post('/save-product','ProductController@store')->name('product.save');
Route::get('/show-product','ProductController@index')->name('product.index');
Route::get('/export-products', 'ProductController@export')->name('product.export');


/**
 * Slider İşlemleri
 */
Route::get('/show-sliders','SliderController@index')->name('slider.index');
Route::get('/delete-slider/{id}','SliderController@destroy')
    ->name('delete.slider')->where(array('id' =>'[0-9]+'));

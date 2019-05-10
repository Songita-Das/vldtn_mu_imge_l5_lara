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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('team', function () {
    return view('team');
})->name('team');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('/create', 'AdminController@create');
Route::post('store', 'AdminController@store')->name('mystore');


Route::get('singleimage', 'AdminController@singleimage')->name('singleimage');
Route::post('singleupload', 'AdminController@singleupload')->name('singleupload');
Route::get('singleshow','AdminController@singleshow')->name('singleshow');

Route::get('multipleimage', 'AdminController@multipleimage')->name('multipleimage');
Route::post('multipleupload', 'AdminController@multipleupload')->name('multipleupload');
Route::get('multipleshow','AdminController@multipleshow')->name('multipleshow');

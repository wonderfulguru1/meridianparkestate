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

Route::get('/', 'pagesController@index');
Route::get('/apartments', 'pagesController@apartments');
Route::get('/about-us', 'pagesController@aboutUS');
Route::get('/contact-us', 'pagesController@ContactUS');
Route::get('/apartments/{slug}', 'pagesController@apartment');

Auth::routes();


Route::get('/home', 'HomeController@index');
Route::get('/wigets/locations', 'WigetsController@locations')->name('wigets.locations');
Route::get('/wigets/property-types', 'WigetsController@propertyType')->name('wigets.property-types');
Route::resource('properties', 'PropertiesController');
Route::get('property/{id}', 'PropertiesController@property')->name('properties.property');

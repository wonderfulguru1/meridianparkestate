<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//apis for locations
Route::post('/createLocation', 'WigetsController@createLocation');
Route::get('/get-locations', 'WigetsController@getLocations');
Route::Post('/update-locations', 'WigetsController@updateLocation');

//apis for property type
Route::post('/create-property-types', 'WigetsController@createPropertyType');
Route::get('/get-property-types', 'WigetsController@getPropertyType');
Route::Post('/update-property-types', 'WigetsController@updatePropertyType');

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

// User routes

Route::get('users', 'UserController@index');
Route::post('users', 'UserController@store');
Route::prefix('@{username}')->group(function() {
    Route::get('/orders', 'UserController@showRequestedOrders');
    Route::get('/orders/accepted', 'UserController@showAcceptedOrders');
    Route::get('/animals', 'UserController@showAnimals');
    Route::get('/', 'UserController@show');
    Route::put('/', 'UserController@update');
    Route::delete('/', 'UserController@destroy');
});

// Animal routes

Route::get('animals', 'AnimalController@index');
Route::post('animals', 'AnimalController@store');
Route::prefix('+{username}')->group(function () {
    Route::get('/orders', 'AnimalController@showOrders');
    Route::get('/owners', 'AnimalController@showOwners');
    Route::get('/', 'AnimalController@show');
    Route::put('/', 'AnimalController@update');
    Route::delete('/', 'AnimalController@destroy');
});

// Animal bleed routes

Route::resource('animals/bleeds', 'AnimalBleedController')->only('index', 'store', 'show', 'update', 'destroy');

// Animal type routes

Route::resource('animals/types', 'AnimalTypeController')->only('index', 'store', 'show', 'update', 'destroy');

// Service routes

Route::resource('services', 'ServiceController')->only('index', 'store', 'show', 'update', 'destroy');

// Service order routes

Route::resource('orders', 'ServiceOrderController')->only('index', 'store', 'show', 'update', 'destroy');

// Status routes

Route::resource('status', 'StatusController')->only('index', 'store', 'show', 'update', 'destroy');
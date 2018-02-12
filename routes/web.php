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
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

//company
Route::resource('/companies', 'CompanyController');

//Location
Route::resource('/locations', 'LocationController');

//users
Route::resource('/users', 'UserController');

//users
Route::resource('/users', 'UserController');

//users
Route::resource('/users', 'UserController');


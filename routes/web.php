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

//Deposit Accounts
Route::resource('/depositaccounts', 'DepositAccountController');

//Bank Accounts
Route::resource('/bankaccounts', 'BankAccountController');

//Users
Route::resource('/users', 'UserController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Purchase
//Motor Part
Route::resource('/motorparts', 'MotorPartController');

//Lubricant
Route::resource('/lubricants', 'LubricantController');

//Expense
//Fuel Cng
Route::resource('/fuel', 'FuelController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');

//Advance Pay
Route::resource('/advancepays', 'AdvancePayController');


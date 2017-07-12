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

Route::get('/customers', 'CustomerController@getAllCustomers');

Route::get('/customer/{id}', 'CustomerController@getCustomer');

Route::post('/customer', 'CustomerController@addCustomer');

Route::get('/customer/delete/{id}', 'CustomerController@deleteCustomer');

Route::post('customer/update/{id}', 'CustomerController@updateCustomer');

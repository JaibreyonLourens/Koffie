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
Route::resource('sales', 'SalesController');
Route::resource('maintenance', 'maintenanceController');
Route::resource('finance', 'FinanceController');
//Route::resource('warehouse', 'WarehouseController');
Route::resource('products', 'productsController');
Route::resource('customer', 'customerController');
Route::resource('supplies', 'SuppliesController');
Route::resource('inkoop', 'inkoopController');
Route::resource('offerte', 'offerteController');
Route::get('/home', 'HomeController@index')->name('home');

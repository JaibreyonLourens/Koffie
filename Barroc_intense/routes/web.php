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

route::post('orders.order', 'orderscontroller@order')->name('orders.order');
route::post('supplies.filter', 'inkoopcontroller@filter')->name('supplies.filter');
Auth::routes();
Route::resource('sales', 'SalesController')->middleware('auth', 'role:3');
Route::resource('maintenance', 'maintenanceController')->middleware('auth', 'role:4');
Route::resource('finance', 'FinanceController')->middleware('auth', 'role:2');
//Route::resource('warehouse', 'WarehouseController');
Route::resource('products', 'productsController');
Route::resource('customer', 'customerController')->middleware('auth', 'role:7');
Route::resource('supplies', 'SuppliesController');
Route::resource('inkoop', 'inkoopController')->middleware('auth', 'role:6');
Route::resource('offerte', 'offerteController');
Route::resource('orders', 'ordersController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {
   dd(\Auth::user());
});

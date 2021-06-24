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

Route::view ('/', 'h');


Route::view ('about', 'az');
Route::view ('contact', 'contact');
Route::view ('az' , 'az');

Route::get('customer','\App\Http\Controllers\CustomersController@index'  );
Route::get('customers/create','\App\Http\Controllers\CustomersController@create'  );
Route::post('customer', '\App\Http\Controllers\CustomersController@store');

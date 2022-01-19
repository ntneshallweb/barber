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

Route::get('/', 'App\Http\Controllers\CommonController@index');
Route::get('/home2', 'App\Http\Controllers\CommonController@index2');

Route::get('/admin/banners/index','App\Http\Controllers\BannersController@index');
Route::get('/admin/banners/','App\Http\Controllers\BannersController@index');
Route::get('/admin/banners/create','App\Http\Controllers\BannersController@create');
Route::post('admin/banners/store','App\Http\Controllers\BannersController@store');
Route::PUT('/admin/banners/update/{id}','App\Http\Controllers\BannersController@update');
Route::get('/admin/banners/edit/{id}','App\Http\Controllers\BannersController@edit');
Route::get('/admin/banners/delete/{id}','App\Http\Controllers\BannersController@delete');

Route::get('/admin/abouts/index','App\Http\Controllers\AboutsController@index');
Route::get('/admin/abouts/','App\Http\Controllers\AboutsController@index');
Route::get('/admin/abouts/create','App\Http\Controllers\AboutsController@create');
Route::post('admin/abouts/store','App\Http\Controllers\AboutsController@store');
Route::PUT('/admin/abouts/update/{id}','App\Http\Controllers\AboutsController@update');
Route::get('/admin/abouts/edit/{id}','App\Http\Controllers\AboutsController@edit');
Route::get('/admin/abouts/delete/{id}','App\Http\Controllers\AboutsController@delete');



Route::get('/admin/service/index','App\Http\Controllers\ServicesController@index');
Route::get('/admin/service/','App\Http\Controllers\ServicesController@index');
Route::get('/admin/service/create','App\Http\Controllers\ServicesController@create');
Route::post('admin/service/store','App\Http\Controllers\ServicesController@store');
Route::PUT('/admin/service/update/{id}','App\Http\Controllers\ServicesController@update');
Route::get('/admin/service/edit/{id}','App\Http\Controllers\ServicesController@edit');
Route::get('/admin/service/delete/{id}','App\Http\Controllers\ServicesController@delete');

Route::get('/admin/hours/index','App\Http\Controllers\HoursController@index');
Route::get('/admin/hours/','App\Http\Controllers\HoursController@index');
Route::get('/admin/hours/create','App\Http\Controllers\HoursController@create');
Route::post('admin/hours/store','App\Http\Controllers\HoursController@store');
Route::PUT('/admin/hours/update/{id}','App\Http\Controllers\HoursController@update');
Route::get('/admin/hours/edit/{id}','App\Http\Controllers\HoursController@edit');
Route::get('/admin/hours/delete/{id}','App\Http\Controllers\HoursController@delete');


Route::get('/admin/prices/index','App\Http\Controllers\PricesController@index');
Route::get('/admin/prices/','App\Http\Controllers\PricesController@index');
Route::get('/admin/prices/create','App\Http\Controllers\PricesController@create');
Route::post('admin/prices/store','App\Http\Controllers\PricesController@store');
Route::PUT('/admin/prices/update/{id}','App\Http\Controllers\PricesController@update');
Route::get('/admin/prices/edit/{id}','App\Http\Controllers\PricesController@edit');
Route::get('/admin/prices/delete/{id}','App\Http\Controllers\PricesController@delete');

Route::get('/admin/quotes/index','App\Http\Controllers\QuotesController@index');
Route::get('/admin/quotes/','App\Http\Controllers\QuotesController@index');
Route::get('/admin/quotes/create','App\Http\Controllers\QuotesController@create');
Route::post('admin/quotes/store','App\Http\Controllers\QuotesController@store');
Route::PUT('/admin/quotes/update/{id}','App\Http\Controllers\QuotesController@update');
Route::get('/admin/quotes/edit/{id}','App\Http\Controllers\QuotesController@edit');
Route::get('/admin/quotes/delete/{id}','App\Http\Controllers\QuotesController@delete');

Route::get('/admin/clients/index','App\Http\Controllers\ClientsController@index');
Route::get('/admin/clients/','App\Http\Controllers\ClientsController@index');
Route::get('/admin/clients/create','App\Http\Controllers\ClientsController@create');
Route::post('admin/clients/store','App\Http\Controllers\ClientsController@store');
Route::PUT('/admin/clients/update/{id}','App\Http\Controllers\ClientsController@update');
Route::get('/admin/clients/edit/{id}','App\Http\Controllers\ClientsController@edit');
Route::get('/admin/clients/delete/{id}','App\Http\Controllers\ClientsController@delete');
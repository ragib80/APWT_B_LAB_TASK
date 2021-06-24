<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
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


Route::get('/login', ['as' => 'login.index', 'uses' => 'LoginController@index']); //name route in different syntex
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::get('/registration','RegistrationController@index')->name('registration.index');
Route::post('/registration','RegistrationController@verify')->name('registration.check');
Route::group(['middleware' => ['sess']], function () {

    Route::get('/home', 'HomeController@index')->middleware('sess');
    Route::get('/user/list', 'UserController@index')->name('user.index'); 
    Route::get('/user/details/{id}', 'UserController@details')->name('user.details');
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/create', 'UserController@insert');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/user/edit/{id}', 'UserController@update');
    Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
    Route::post('/user/delete/{id}', 'UserController@destroy');
    
});


Route::get('/system/sales', 'SalesController@index')->name('sales.index');
Route::post('/system/sales', 'SalesController@store');
Route::get('/sales/physical', 'SalesController@physical')->name('sales.physical');
Route::get('/system/sales/social', 'SalesController@social')->name('sales.social');
Route::get('/system/sales/ecommerce', 'SalesController@ecommerce')->name('sales.ecommerce');
Route::post('/system/sales/physical/sales_log', 'SalesController@ecommerce');
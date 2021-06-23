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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/login','loginController@index')->name('login.index');
Route::post('/login','loginController@verify')->name('login.check');
Route::get('/logout', 'LogoutController@index')->name('logout');
Route::get('/registration','RegistrationController@index')->name('registration.index');
Route::post('/registration','RegistrationController@verify')->name('registration.check');
Route::get('/home', 'HomeController@index')->middleware('sess');


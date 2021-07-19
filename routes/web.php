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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::group(['namespace' => 'Admin\Tour'], function () {
    Route::resource('admin/tours', 'TourController');
    Route::get('admin/tours/list', 'TourController@getAll');
});

Route::group(['namespace' => 'Admin\BookingRequest'], function () {
    Route::resource('admin/bookings', 'BookingRequestController');
});


Route::group(['namespace' => 'Admin\User'], function () {
    Route::resource('admin/users', 'UserController', ['only' => ['index', 'store', 'destroy']]);
    Route::get('admin/users/list', 'UserController@getAll');
});

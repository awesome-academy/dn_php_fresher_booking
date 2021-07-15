<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin/Tours Routes
|--------------------------------------------------------------------------
|
| Here is where you can register task routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "auth" middleware group.
|
*/

Route::group(['namespace' => 'Admin\Tour'], function () {
    Route::resource('/', 'TourController');
});

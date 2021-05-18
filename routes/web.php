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

Route::group(['namespace' => 'Subscriptions'], function() {
    Route::get('plans', 'SubscriptionController@index')->name('plans');
    Route::get('/payments', 'PaymentController@index')->name('payments');
    Route::post('/payments', 'PaymentController@store')->name('payments.store');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

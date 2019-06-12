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

Route::resources([
    'clothing' => 'ClothingController',
]);

Route::get('calendar/{year?}/{month?}', 'DayController@index')->where(['year' => '[0-9]{4}', 'month' => '^0?[1-9][012]?$'])->name('calendar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

//DB::listen(function($query) {
//    var_dump($query->sql, $query->bindings);
//});


Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('view', 'TrucksController@view')->name('trucks.view');

Route::resource('manage/riders', 'RidersController');
Route::resource('manage/states', 'StateTruckController');
Route::resource('manage/types', 'TypeTruckController');
Route::resource('manage', 'TrucksController');

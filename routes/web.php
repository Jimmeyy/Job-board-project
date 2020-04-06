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

Route::get('/', function() {
    return redirect('/home');
});

// Auth routes
Auth::routes();

// Home routes
Route::get('/home', 'HomeController@index')->name('home');

// Jobs routes
Route::get('/jobs', 'JobController@index')->name('jobs');

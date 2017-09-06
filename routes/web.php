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
Auth::routes();

Route::resource('/coctails', 'CoctailsController');

Route::get('/home', 'CoctailsController@index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/AdamsAppleRecipeCustomer', function () {
    return view('AdamsAppleRecipeCustomer');
});

Route::get('/pranesimas', function () {
    return view('pranesimas');
});

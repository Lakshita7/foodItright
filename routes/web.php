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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/donate', function () {
    return view('donate');
});


Route::get('/NGO', function () {
    return view('NGO');
});


Route::get('/signup', function () {
    return view('signup');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/donor/donate', 'DonorController@donate');

Route::post('/donor', 'DonorController@store');



Route::get('/NGO1','NGO1Controller@NGO');

Route::post('/NGO1','NGO1Controller@store');

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

Route::get('/menu', function () {
    return view('menu/index');
});
Route::get('/menu/{slug}', function () {
    return view('menu/single-menu');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/waitlist', function () {
    return view('pages/waitlist');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/offers', function () {
    return view('pages/offers');
});

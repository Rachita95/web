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

Route::get('/contact', 'StaticController@contact_us');
Route::get('/about', 'StaticController@about_us');
Route::get('/terms', 'StaticController@terms_and_conditions');
Route::get('/privacy', 'StaticController@privacy_policy');
Route::get('/refund', 'StaticController@refund_policy');
Route::get('/faq', 'StaticController@frequently_asked_questions');
Route::get('/careers', 'StaticController@careers');


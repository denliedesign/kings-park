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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('classes', function () {
    return view('classes');
});

Route::get('employment', function () {
    return view('employment');
});

Route::get('parties', function () {
    return view('parties');
});

Route::get('policy', function () {
    return view('policy');
});

Route::get('promotions', function () {
    return view('promotions');
});

Route::get('recital', function () {
    return view('recital');
});

Route::get('teams', function () {
    return view('teams');
});

Route::get('calendar/july', function () {
    return view('calendar/july');
});

Route::get('contact', 'ContactUsController@create')->name('contact.create');
Route::post('contact', 'ContactUsController@store')->name('contact.store');

Route::get('trial', 'FreeTrialController@create')->name('trial.create');
Route::post('trial', 'FreeTrialController@store')->name('trial.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

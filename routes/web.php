<?php

use Illuminate\Support\Facades\Cache;
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
    return view('homepage');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Customer form routes
Route::get('/prenotazione', 'CustomerController@index')->name('appointment');
Route::post('prenotazione/conferma', 'CustomerController@store')->name('appointment.confirm');


//Header routes

Route::get('info','HeaderController@info')->name('about-us');
Route::get('servizi','HeaderController@services')->name('services');
Route::get('contatti','HeaderController@contact')->name('contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//TEST EMAIL JOBS

Route::get('test-email', 'JobController@processQueue');

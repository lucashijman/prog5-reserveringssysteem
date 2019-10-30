<?php

use Illuminate\Http\Request;

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

Route::get('/home', function () {
    return view ('home');
});

Route::get('/about', function() {
    return view ('about');
});

Route::get('/contact', function() {
    return view ('contact');
});

Auth::routes();

Route::get('/show/appointments', 'AppointmentsController@index');

Route::get('/show/timeslots', 'TimeslotsController@index');

Route::get('/create/appointment', function () {
    return view ('appointments\create');
});

Route::get('/create/timeslot', function () {
    return view ('timeslots\create');
});

// Route::get('/afspraken/mijn', '');

// Route::get('/opentimeslots/mijn', '');

Route::post('/store/appointment', 'AppointmentsController@create');

Route::post('/store/timeslot', 'TimeslotsController@create');
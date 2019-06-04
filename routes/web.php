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
    return view('index');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/apply', function () {
    return view('apply');
});



Route::get('/form', 'formController@index');
Route::post('/form/submit', 'formController@process');
Route::get('/resources', 'formController@resources');
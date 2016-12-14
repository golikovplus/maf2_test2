<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('index');
    })->name('/');

    Route::get('/api/lead/{id?}', 'Leads@index')->name('lead.index');
    Route::post('/api/lead', 'Leads@store')->name('lead.store');
    Route::post('/api/lead/{id}', 'Leads@update')->name('lead.update');
    Route::delete('/api/lead/{id}', 'Leads@destroy')->name('lead.destroy');
});
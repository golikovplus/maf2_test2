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

    Route::get('/', function () {return view('index');})->name('/');
    Route::get('/backend', function () {return view('backend');})->name('backend');

    Route::any('/location/{location}', function () {return view('index');});

    Route::get('/api/lead/{id?}', 'Leads@index')->name('lead.index');
    Route::post('/api/lead', 'Leads@store')->name('lead.store');
    Route::post('/api/lead/{id}', 'Leads@update')->name('lead.update');
    Route::delete('/api/lead/{id}', 'Leads@destroy')->name('lead.destroy');

    Route::get('/api/testimonial/{id?}', 'Testimonials@index')->name('testimonial.index');
    Route::post('/api/testimonial', 'Testimonials@store')->name('testimonial.store');
    Route::post('/api/testimonial/{id}', 'Testimonials@update')->name('testimonial.update');
    Route::delete('/api/testimonial/{id}', 'Testimonials@destroy')->name('testimonial.destroy');
});

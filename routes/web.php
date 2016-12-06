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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'find-agent'], function() {
    Route::get('', 'LeadGeneratorBaseComponent');
    Route::get('location', 'LocationFormStepComponent');
    Route::get('preferences', 'PreferencesFormStepComponent');
    Route::get('price-range', 'PriceRangeFormStepComponent');
    Route::get('home-type', 'HomeTypeFormStepComponent');
    Route::get('agent-hero', 'AgentHeroFormStepComponent');
    Route::get('lead-type', 'LeadTypeFormStepComponent');
    Route::get('time-frame', 'TimeFrameFormStepComponent');
    Route::get('basic-info', 'BasicPersonalInfoFormStepComponent');
    Route::get('contact-info', 'ContactPersonalInfoFormStepComponent');
    Route::get('status', 'StatusFormStepComponent');
    Route::get('searching', 'SearchingFormStepComponent');
});
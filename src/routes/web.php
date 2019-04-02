<?php

use Illuminate\Http\Request;

//Route::get('contact','ContactController@index')->name('contact');
//
//Route::post('contact','ContactController@index');

Route::group(['namespace' => 'Bitfumes\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@send');
});
<?php

Route::group(['namespace' => 'Codebox\Contact\Http\Controllers'], function(){

    Route::get('/contact', 'ContactController@getContactForm');
    Route::post('/contact', 'ContactController@contact')->name('contact.form');
});

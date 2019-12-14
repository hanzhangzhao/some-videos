<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/login','LoginController@loginForm');
    Route::post('login','LoginController@loginHandle');
    Route::get('index','LoginController@index');
    Route::get('logout','LoginController@logout');

    Route::get('profile','ProfileController@passwordForm');
    Route::post('profile','ProfileController@changePassword');

    Route::resource('tag','TagController');
});

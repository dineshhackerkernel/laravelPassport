<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'API'], function () {
    Route::post('authenticate', 'UserController@authenticate');
    Route::post('register', 'UserController@register');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'UserController@logout');
        Route::get('user', 'UserController@getAuthenticatedUser');
    });
});

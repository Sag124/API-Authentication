<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
    dd("salut");
});

Route::post('register', 'Api\Auth\RegisterController@register');

Route::post('login', 'Api\Auth\LoginController@login');

Route::post('refresh', 'Api\Auth\LoginController@refresh');

// Route::get('/login', 'api\UserController@login');
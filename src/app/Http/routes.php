<?php

//
//        // Authentication Routes...
//        $this->get('login', 'Auth\AuthController@showLoginForm');
//        $this->post('login', 'Auth\AuthController@login');
//        $this->get('logout', 'Auth\AuthController@logout');
//
//        // Registration Routes...
//        $this->get('register', 'Auth\AuthController@showRegistrationForm');
//        $this->post('register', 'Auth\AuthController@register');
//
//        // Password Reset Routes...
//        $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
//        $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
//        $this->post('password/reset', 'Auth\PasswordController@reset');

Route::group([
    'namespace' => '\App\Http\Controllers\Auth',
    'middleware' => ['web']
    ], function () {
        Route::get('login', 'AuthController@showLoginForm');
        Route::post('login', 'AuthController@login');
        Route::get('logout', 'AuthController@logout');

        Route::get('register', 'AuthController@showRegistrationForm');
        Route::post('register', 'AuthController@register');

        Route::get('password/reset/{token?}', 'PasswordController@showResetForm');
        Route::post('password/email', 'PasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'PasswordController@reset');
});
//
//Route::group([
//    'namespace' => 'Ognestraz\Auth\Http\Controllers',
//    'middleware' => ['web', 'throttle:5,1']
//    ], function () {
//        Route::post('/login', array('uses' => 'AuthController@postLogin'));
//});
//
//Route::group([
//    'namespace' => 'Ognestraz\Auth\Http\Controllers',
//    'middleware' => ['web', 'admin']
//    ], function () {
//        Route::get('/logout', array('uses' => 'AuthController@logout'));
//});

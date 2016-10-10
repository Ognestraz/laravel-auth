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
        Route::get('login', 'LoginController@showLoginForm');
        Route::post('login', 'LoginController@login');
        Route::get('logout', 'LoginController@logout');

        Route::get('register', 'RegisterController@showRegistrationForm');
        Route::post('register', 'RegisterController@postRegister');

        Route::get('password/email', 'ForgotPasswordController@showEmailForm');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');

        Route::get('password/reset/{token?}', 'ResetPasswordController@showResetForm');
        Route::post('password/reset', 'ResetPasswordController@reset');
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

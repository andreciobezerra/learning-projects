<?php

use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::post('register', 'AuthController@register')->name('auth.register');
});

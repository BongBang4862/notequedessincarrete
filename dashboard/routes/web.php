<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'ConnectController@getLogin')->name('login');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')
->name('home');

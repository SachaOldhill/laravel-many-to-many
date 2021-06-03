<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')
->name('home');

// Route::get('/match/{id}', 'MainController@show')
// -> name('show');
//
// Route::get('/create/match', 'MainController@create')
// -> name('create');
//
// Route::post('/store/match', 'MainController@store')
// ->name('store');
//
// Route::get('/destroy/{id}', 'MainController@destroy')
// -> name('destroy');
//
// Route::get('/edit/match/{id}', 'MainController@edit')
// -> name('edit');
//
// Route::post('update/match/{id}', 'MainController@update')
// ->name('update');

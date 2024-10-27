<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('user', 'UserController@index');
Route::get('userform', [\App\Http\Controllers\FormProcessor::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/donations', 'App\Http\Controllers\DonationsController@index')-> name('donations.index');

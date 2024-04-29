<?php

use App\Http\Controllers\data;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/data', [data::class, 'data'])->name('data');

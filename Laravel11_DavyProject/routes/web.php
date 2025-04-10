<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProfilesController;

Route::get('/profiles', [ProfilesController::class, 'index']);

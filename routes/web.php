<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\StarWarsController;


Route::get('/', function () {

    return view('welcome');
    Route::get('/starwars', [StarWarsController::class, 'StarWarsData']);

});

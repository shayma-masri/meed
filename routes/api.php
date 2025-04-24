<?php

use App\Http\Controllers\LoginController;

Route::post('/login/api', [LoginController::class, 'login']);

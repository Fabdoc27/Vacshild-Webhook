<?php

use App\Http\Controllers\Api\Auth\UserRegistrationController;
use Illuminate\Support\Facades\Route;

Route::post('/webhook/register', UserRegistrationController::class);

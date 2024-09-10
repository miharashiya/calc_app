<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;


Route::get('/calcs/{num1}/{calc}/{num2}', [CalcController::class ,'result']);

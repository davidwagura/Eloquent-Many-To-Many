<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;


Route::get('/', [newController::class, 'records']);

Route::get('/create', [newController::class, 'create']);
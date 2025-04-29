<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\QuoteRequestController;

Route::apiResource('projects', ProjectController::class);
Route::apiResource('services', ServiceController::class);
Route::post('/quote-requests', [QuoteRequestController::class, 'store']);

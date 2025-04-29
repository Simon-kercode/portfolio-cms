<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\ProjectController;
use \App\Http\Controllers\Admin\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::resource('services', ServiceController::class);
});

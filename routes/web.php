<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', ProjectController::class);
});

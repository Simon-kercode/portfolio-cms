<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\ProjectController;
use \App\Http\Controllers\Admin\ServiceController;

Route::get('/', function () {
    return view('home');
})->name('home');
// Route::get('dashboard', function () {
//     return view('dashboard');
// });

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('projects', ProjectController::class);
//     Route::resource('services', ServiceController::class);
// });
// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/projects', function () {
        return view('admin.projects');
    })->name('admin.projects');
    
    Route::get('/services', function () {
        return view('admin.services');
    })->name('admin.services');
    
    Route::get('/statistics', function () {
        return view('admin.statistics');
    })->name('admin.statistics');
    
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
    
    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');
});

// Contact form submission
Route::post('/contact', function () {
    // Handle contact form submission
    return redirect()->back()->with('message', 'Votre message a été envoyé avec succès!');
})->name('contact.submit');

require __DIR__.'/auth.php';

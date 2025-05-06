<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Front\HomeController;
use \App\Http\Controllers\Admin\ProjectController;
use \App\Http\Controllers\Admin\ServiceController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('dashboard', function () {
//     return view('dashboard');
// });

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//         // Route::get('/', function () {
//         //     return view('admin.dashboard');
//         // })->name('admin.dashboard');

//     Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
//     Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
//     Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
//     Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

//     Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
// });
// Admin routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Route::get('/projects', function () {
    //     return view('admin.projects');
    // })->name('admin.projects');
    
    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects');

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

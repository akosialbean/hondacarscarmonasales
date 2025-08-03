<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/promos', function () {
    return Inertia::render('Promos');
})->name('promos');

Route::get('/vehicleapplication', function () {
    return Inertia::render('VehicleApplication');
})->name('vehicleapplication');

Route::get('/reviews', function () {
    return Inertia::render('CustomerReviews');
})->name('reviews');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('vehicleapplications', function () {
    return Inertia::render('VehicleApplications');
})->middleware(['auth', 'verified'])->name('vehicleapplications');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')
    ->name('home');;
//', \App\Livewire\Home::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// admin panel with access role permission for admin
Route::group(['middleware' => ['can:access admin panel']], function () {
    Route::view('admin', 'admin')
        ->middleware(['auth', 'verified'])
        ->name('admin');
});


// Workouts
// Create
Route::get('/workouts/create', [\App\Http\Controllers\WorkoutsController::class, 'create'])
    ->middleware(['auth'])
    ->name('workouts.create');

// Show
Route::get('/workouts/{workout}', [\App\Http\Controllers\WorkoutsController::class, 'show'])
    ->name('workouts.show');

// Store
Route::post('/workouts/store', [\App\Http\Controllers\WorkoutsController::class, 'store'])
    ->middleware(['auth'])
    ->name('workouts.store');

// Edit
Route::get('/workouts/{workout}/edit', [\App\Http\Controllers\WorkoutsController::class, 'edit'])
    ->middleware(['auth'])
    ->name('workouts.edit');

// Update
Route::put('/workouts/update', [\App\Http\Controllers\WorkoutsController::class, 'update'])
    ->middleware(['auth'])
    ->name('workouts.update');

require __DIR__.'/auth.php';

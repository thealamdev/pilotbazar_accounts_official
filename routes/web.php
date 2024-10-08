<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::prefix('version1')->name('version1.')->group(function () {
            Route::prefix('vehicle-management')->name('vehicle-management.')->group(function () {
                require __DIR__ . '/version1/vehicle-management/base.php';
            });

            Route::prefix('investor-management')->name('investor-management.')->group(function () {
                require __DIR__ . '/version1/investor-management/base.php';
            });

            Route::prefix('expense-management')->name('expense-management.')->group(function () {
                require __DIR__ . '/version1/expense-management/base.php';
            });
        });
        
    });
});

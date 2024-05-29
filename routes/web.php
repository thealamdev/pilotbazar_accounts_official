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
        Route::prefix('investors')->name('investor.')->group(function () {
            Route::get('/', \App\Livewire\Investor\Table\Investor\InvestorComponent::class)->name('index');
            Route::get('create', \App\Livewire\Investor\Stack\Investor\CreateComponent::class)->name('create');

        });
    });
});

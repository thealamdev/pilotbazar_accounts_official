<?php

use Illuminate\Support\Facades\Route;

Route::prefix('vehicle')->name('vehicle.')->group(function () {
    Route::get('/', \App\Livewire\VehicleManagement\Stack\Vehicle\CreateComponent::class)->name('index');
});

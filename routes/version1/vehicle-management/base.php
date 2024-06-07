<?php

use Illuminate\Support\Facades\Route;

Route::prefix('vehicles')->name('vehicle.')->group(function () {
    Route::get('/', \App\Livewire\VehicleManagement\Table\Vehicle\TableComponent::class)->name('index');
    Route::get('create', \App\Livewire\VehicleManagement\Stack\Vehicle\CreateComponent::class)->name('create');

    /**
     * Vehicle modules Routes.
     */
    Route::prefix('modules')->name('module.')->group(function () {
        Route::prefix('colors')->name('color.')->group(function () {
            Route::get('/', \App\Livewire\VehicleManagement\Table\Modules\Color\TableComponent::class)->name('index');
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Modules\Color\CreateComponent::class)->name('create');
        });
        Route::prefix('models')->name('model.')->group(function () {
            Route::get('/', \App\Livewire\VehicleManagement\Table\Modules\Model\TableComponent::class)->name('index');
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Modules\Models\CreateComponent::class)->name('create');
        });
        Route::prefix('model-year')->name('model-year.')->group(function () {
            Route::get('/', \App\Livewire\VehicleManagement\Table\Modules\ModelYear\TableComponent::class)->name('index');
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Modules\ModelYear\CreateComponent::class)->name('create');
        });
    });
});

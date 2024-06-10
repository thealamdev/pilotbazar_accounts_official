<?php

use Illuminate\Support\Facades\Route;

Route::prefix('vehicles')->name('vehicle.')->group(function () {
    Route::get('/', \App\Livewire\VehicleManagement\Table\Vehicle\TableVehicleComponent::class)->name('index');
    Route::get('create', \App\Livewire\VehicleManagement\Stack\Vehicle\CreateVehicleComponent::class)->name('create');

    /**
     * Vehicle modules Routes.
     */
    Route::prefix('modules')->name('module.')->group(function () {
        Route::prefix('colors')->name('color.')->group(function () {
            Route::get('/', \App\Livewire\VehicleManagement\Table\Modules\Color\TableComponent::class)->name('index');
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Modules\Color\CreateComponent::class)->name('create');
            Route::get('update/{color}', \App\Livewire\VehicleManagement\Stack\Modules\Color\UpdateComponent::class)->name('update');
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
    /**
     * Vehicle Dependency Routes
     */
    Route::prefix('dependencies')->name('dependency.')->group(function () {
        Route::prefix('payments')->name('payment.')->group(function () {
            Route::prefix('methods')->name('method.')->group(function () {
                Route::get('/', \App\Livewire\VehicleManagement\Table\Dependency\Payment\Method\TableMethodComponent::class)->name('index');
                Route::get('create', \App\Livewire\VehicleManagement\Stack\Dependency\Payment\Method\CreateMethodComponent::class)->name('create');
            });
        });
    });
});

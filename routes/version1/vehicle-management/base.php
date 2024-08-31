<?php

use Illuminate\Support\Facades\Route;

Route::prefix('vehicles')->name('vehicle.')->group(function () {
    Route::get('/', \App\Livewire\VehicleManagement\Table\Vehicle\TableVehicleComponent::class)->name('index');
    Route::get('create', \App\Livewire\VehicleManagement\Stack\Vehicle\CreateVehicleComponent::class)->name('create');
    Route::get('{vehicle}/show', \App\Livewire\VehicleManagement\Show\Vehicle\ShowVehicleComponent::class)->name('show');
    /**
     * Vehicle payment method, costings and sell routes
     */
    Route::prefix('{vehicle}')->group(function () {
        Route::prefix('buy-payment')->name('buy-payment.')->group(function () {
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentComponent::class)->name('create');
        });

        Route::prefix('sell')->name('sell.')->group(function () {
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Vehicle\VehicleSell\CreateVehicleSellComponent::class)->name('create');
        });

        Route::prefix('sell-payment')->name('sell-payment.')->group(function () {
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Vehicle\VehicleSellPayment\CreateVehicleSellPaymentComponent::class)->name('create');
        });

        Route::prefix('costings')->name('costing.')->group(function () {
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Vehicle\VehicleCosting\VehicleCostingComponent::class)->name('create');
        });
    });

    /**
     * Vehicle sell service and it's categories
     */
    Route::prefix('sell-services')->name('sell-service.')->group(function () {
        Route::get('create', \App\Livewire\VehicleManagement\Stack\SellService\Category\CreateSellServiceCategoryComponent::class)->name('create');
        // Route::prefix('{vehicle}')->group(function () {});
    });

    /**
     * Vehicle modules Routes.
     */
    Route::prefix('modules')->name('module.')->group(function () {
        Route::prefix('colors')->name('color.')->group(function () {
            Route::get('/', \App\Livewire\VehicleManagement\Table\Modules\Color\TableColorComponent::class)->name('index');
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Modules\Color\CreateColorComponent::class)->name('create');
            Route::get('update/{color}', \App\Livewire\VehicleManagement\Stack\Modules\Color\UpdateColorComponent::class)->name('update');
        });
        Route::prefix('models')->name('model.')->group(function () {
            Route::get('/', \App\Livewire\VehicleManagement\Table\Modules\Models\TableModelComponent::class)->name('index');
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Modules\Models\CreateModelComponent::class)->name('create');
            Route::get('update/{model}', \App\Livewire\VehicleManagement\Stack\Modules\Models\UpdateModelComponent::class)->name('update');
        });
        Route::prefix('model-year')->name('model-year.')->group(function () {
            Route::get('/', \App\Livewire\VehicleManagement\Table\Modules\ModelYear\TableModelYearComponent::class)->name('index');
            Route::get('create', \App\Livewire\VehicleManagement\Stack\Modules\ModelYear\CreateModelYearComponent::class)->name('create');
            Route::get('update/{model_year}', \App\Livewire\VehicleManagement\Stack\Modules\ModelYear\UpdateModelYearComponent::class)->name('update');
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
                Route::get('update/{method}', \App\Livewire\VehicleManagement\Stack\Dependency\Payment\Method\UpdateMethodComponent::class)->name('update');
            });
        });

        Route::prefix('banks')->name('bank.')->group(function () {
            Route::prefix('pbl_banks')->name('pbl_bank.')->group(function () {
                Route::get('/', \App\Livewire\VehicleManagement\Table\Dependency\Bank\TablePblBankComponent::class)->name('index');
                Route::get('create', \App\Livewire\VehicleManagement\Stack\Dependency\Bank\CreatePblBankComponent::class)->name('create');
                Route::get('update/{pbl_bank}', \App\Livewire\VehicleManagement\Stack\Dependency\Bank\UpdatePblBankComponent::class)->name('update');
            });
        });
    });
});

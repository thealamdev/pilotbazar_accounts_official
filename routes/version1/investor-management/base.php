<?php

use Illuminate\Support\Facades\Route;

Route::prefix('investors')->name('investor.')->group(function () {
    Route::get('/',  \App\Livewire\InvestorManagement\Table\Investor\TableInvestorComponent::class)->name('index');
    Route::get('create',  \App\Livewire\InvestorManagement\Stack\Investor\CreateInvestorComponent::class)->name('create');
    Route::get('update/{investor}', \App\Livewire\InvestorManagement\Stack\Investor\UpdateInvestorComponent::class)->name('update');

    Route::prefix('invested-vehicle/{investor}')->name('invested-vehicle.')->group(function () {
        Route::get('create', \App\Livewire\InvestorManagement\Stack\InvestedVehicle\CreateInvestedVehicleComponent::class)->name('create');
    });

    Route::prefix('investments')->name('investment.')->group(function () {
        Route::get('/', \App\Livewire\InvestorManagement\Table\Investment\TableInvestmentComponent::class)->name('index');
    });
});

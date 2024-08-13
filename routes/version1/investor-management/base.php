<?php

use Illuminate\Support\Facades\Route;

Route::prefix('investors')->name('investors.')->group(function () {
    Route::get('/',  \App\Livewire\InvestorManagement\Table\Investor\TableInvestorComponent::class)->name('index');
    Route::get('create',  \App\Livewire\InvestorManagement\Stack\Investor\CreateInvestorComponent::class)->name('create');
    Route::get('update/{investor}', \App\Livewire\InvestorManagement\Stack\Investor\UpdateInvestorComponent::class)->name('update');
});

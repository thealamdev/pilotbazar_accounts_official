<?php

use Illuminate\Support\Facades\Route;

Route::prefix('investors')->name('investors.')->group(function () {
    Route::get('/',  \App\Livewire\InvestorManagement\Stack\Investor\CreateInvestorComponent::class)->name('create');
});

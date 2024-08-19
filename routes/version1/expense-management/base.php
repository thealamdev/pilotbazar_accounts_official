<?php

use Illuminate\Support\Facades\Route;

Route::prefix('expenses')->name('expense.')->group(function () {
    // Route::get('/',  \App\Livewire\InvestorManagement\Table\Investor\TableInvestorComponent::class)->name('index');
    // Route::get('create',  \App\Livewire\InvestorManagement\Stack\Investor\CreateInvestorComponent::class)->name('create');
    // Route::get('update/{investor}', \App\Livewire\InvestorManagement\Stack\Investor\UpdateInvestorComponent::class)->name('update');

    Route::prefix('categories')->name('category.')->group(function () {
        Route::get('create', \App\Livewire\ExpenseManagement\Stack\ExpenseCategory\CreateExpenseCategoryComponent::class)->name('create');
    });
});

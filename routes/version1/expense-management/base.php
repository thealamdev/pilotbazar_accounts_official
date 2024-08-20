<?php

use Illuminate\Support\Facades\Route;

Route::prefix('expenses')->name('expense.')->group(function () {
    Route::prefix('daily')->name('daily.')->group(function () {
        Route::get('/', \App\Livewire\ExpenseManagement\Table\DailyExpense\TableDailyExpenseComponent::class)->name('index');
        Route::get('create', \App\Livewire\ExpenseManagement\Stack\DailyExpense\CreateDailyExpenseComponent::class)->name('create');
    });


    Route::prefix('categories')->name('category.')->group(function () {
        Route::get('/', \App\Livewire\ExpenseManagement\Table\ExpenseCategory\TableExpenseCategoryComponent::class)->name('index');
        Route::get('create', \App\Livewire\ExpenseManagement\Stack\ExpenseCategory\CreateExpenseCategoryComponent::class)->name('create');
        Route::get('update/{expenseCategory}', \App\Livewire\ExpenseManagement\Stack\ExpenseCategory\UpdateExpenseCategoryComponent::class)->name('update');
    });

    Route::prefix('sub-categories')->name('sub-category.')->group(function () {
        // Route::get('/', \App\Livewire\ExpenseManagement\Table\ExpenseSubCategory\TableExpenseCategoryComponent::class)->name('index');
        Route::get('create', \App\Livewire\ExpenseManagement\Stack\ExpenseSubCategory\CreateExpenseSubCategoryComponent::class)->name('create');
        // Route::get('update/{expenseCategory}', \App\Livewire\ExpenseManagement\Stack\ExpenseCategory\UpdateExpenseCategoryComponent::class)->name('update');
    });
});

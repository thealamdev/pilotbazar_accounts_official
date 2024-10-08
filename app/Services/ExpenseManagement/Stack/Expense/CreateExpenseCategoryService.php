<?php

namespace App\Services\ExpenseManagement\Stack\Expense;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;

class CreateExpenseCategoryService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = ExpenseCategory::create([
            'name' => $form->name,
            'status' => $form->status,
        ]);

        return $response;
    }
}

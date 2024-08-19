<?php

namespace App\Services\ExpenseManagement\Stack\Expense;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use App\Models\ExpenseManagement\Expense\ExpenseSubCategory;

class CreateExpenseSubCategoryService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = ExpenseSubCategory::create([
            'expense_category_id' => $form->expense_category_id,
            'name' => $form->name,
            'status' => $form->status,
        ]);

        return $response;
    }
}

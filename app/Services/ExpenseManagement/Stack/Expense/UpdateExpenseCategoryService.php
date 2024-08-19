<?php

namespace App\Services\ExpenseManagement\Stack\Expense;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;

class UpdateExpenseCategoryService
{
    /**
     * Create static adapt method
     * @return bool
     */
    public static function adapt($form, $expenseCategory): bool
    {
        $response = $expenseCategory->update([
            'name' => $form->name,
            'status' => $form->status,
        ]);

        return $response;
    }
}

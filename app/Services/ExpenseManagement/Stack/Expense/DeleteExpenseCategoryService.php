<?php

namespace App\Services\ExpenseManagement\Stack\Expense;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;

class DeleteExpenseCategoryService
{
    /**
     * Create static erase method
     * @var ?string $id
     * @return bool
     */
    public static function erase(?string $id): bool
    {
        $instance = ExpenseCategory::where('id', $id)->first();
        $response = $instance->delete();
        return $response;
    }
}

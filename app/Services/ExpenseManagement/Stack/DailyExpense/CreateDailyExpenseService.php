<?php

namespace App\Services\ExpenseManagement\Stack\DailyExpense;

use App\Models\ExpenseManagement\DailyExpense\DailyExpense;
use App\Models\ExpenseManagement\Expense\ExpenseCategory;

class CreateDailyExpenseService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = DailyExpense::create([
            'expense_category_id' => $form->expense_category_id,
            'purpose' => $form->expense_sub_category,
            'amount'  => $form->amount,
            'date'    => $form->date,
            'remarks' => $form->remarks,
            'status' => $form->status,
        ]);

        return $response;
    }
}

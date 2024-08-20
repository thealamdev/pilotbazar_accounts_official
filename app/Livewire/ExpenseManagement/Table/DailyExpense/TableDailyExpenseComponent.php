<?php

namespace App\Livewire\ExpenseManagement\Table\DailyExpense;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use Livewire\Attributes\Title;
use Livewire\Component;

class TableDailyExpenseComponent extends Component
{
    /**
     * Define public property $responses
     * @var array|object
     */
    public $responses;

    #[Title('Daily Expenses')]
    public function render()
    {
        $this->responses = ExpenseCategory::query()->with('daily_expense')->get();
        return view('livewire.expense-management.table.daily-expense.table-daily-expense-component');
    }
}

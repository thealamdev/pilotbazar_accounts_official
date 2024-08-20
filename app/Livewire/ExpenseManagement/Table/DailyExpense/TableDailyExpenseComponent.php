<?php

namespace App\Livewire\ExpenseManagement\Table\DailyExpense;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\ExpenseManagement\Expense\ExpenseCategory;

class TableDailyExpenseComponent extends Component
{
    /**
     * Define public property $isVisible
     * @var bool
     */
    public $isVisible = true;

    /**
     * Define public method changeVisiblity() to change div visibility
     * @return void
     */
    public function changeVisiblity(): void
    {
        $this->isVisible == false;
    }

    /**
     * Define public property $responses
     * @var array|object
     */
    public $responses;

    #[Title('Daily Expenses')]
    public function render()
    {
        $this->responses = ExpenseCategory::query()
            ->with('expense_categories')
            ->whereHas('daily_expense', function ($query) {
                $query->whereDate('date', Carbon::today());
            })
            ->with(['daily_expense' => function ($query) {
                $query->whereDate('date', Carbon::today());
            }])
            ->get();

        return view('livewire.expense-management.table.daily-expense.table-daily-expense-component', ['isVisible' => $this->isVisible]);
    }
}

<?php

namespace App\Livewire\ExpenseManagement\Stack\DailyExpense;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Database\Eloquent\Collection;
use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use App\Models\ExpenseManagement\Expense\ExpenseSubCategory;
use App\Livewire\Forms\ExpenseManagement\DailyExpense\CreateDailyExpenseRequest;

class CreateDailyExpenseComponent extends Component
{
    /**
     * Define public form object CreateDailyExpenseRequest $form
     */
    public CreateDailyExpenseRequest $form;

    /**
     * Define public property $expense_categories
     * @var ?array|Collection $expense_categories
     */
    public array|Collection $expense_categories = [];

    /**
     * Define public property $expense_sub_categories
     * @var ?array|Collection $expense_sub_categories
     */
    public array|Collection $expense_sub_categories = [];

    /**
     * Define public method mount() for load some resourses
     * @return void
     */
    public function mount(): void
    {
        $this->expense_categories = ExpenseCategory::query()->get();
        $this->expense_sub_categories = ExpenseSubCategory::query()->get();
    }

    /**
     * Define protected property $listeners;
     * @var array
     */
    protected $listeners = [
        'updateExpenseSubCategory' => 'updateExpenseSubCategory',
    ];

    /**
     * Define public method updateExpenseSubCategory()
     * @param $subCategoryName
     * @return void
     */
    public function updateExpenseSubCategory($subCategoryName): void
    {
        $subCategory = ExpenseSubCategory::where('name', $subCategoryName)->first();

        if ($subCategory) {
            $this->form->expense_sub_category = $subCategory->name;
        } else {
            $this->form->expense_sub_category = $subCategoryName;
        }
    }

    /**
     * Define public method save() to store the resourses
     */
    public function save()
    {
        $this->form->validate();
        dd($this->form);
    }

    #[Title('Daily Expense Create')]
    public function render()
    {
        return view('livewire.expense-management.stack.daily-expense.create-daily-expense-component');
    }
}

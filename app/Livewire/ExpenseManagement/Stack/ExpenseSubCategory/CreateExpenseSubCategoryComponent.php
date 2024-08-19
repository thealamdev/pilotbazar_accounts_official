<?php

namespace App\Livewire\ExpenseManagement\Stack\ExpenseSubCategory;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateExpenseSubCategoryComponent extends Component
{
    /**
     * Define public property $expense_categories
     * @var ?array|Collection $expense_categories
     */
    public array|Collection $expense_categories = [];

    /**
     * Define public method mount() for load some resourses
     * @return void
     */
    public function mount(): void
    {
        $this->expense_categories = ExpenseCategory::query()->get();
    }

    #[Title('Expense Sub Category Create')]
    public function render()
    {
        return view('livewire.expense-management.stack.expense-sub-category.create-expense-sub-category-component');
    }
}

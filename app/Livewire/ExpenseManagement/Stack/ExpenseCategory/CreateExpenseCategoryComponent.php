<?php

namespace App\Livewire\ExpenseManagement\Stack\ExpenseCategory;

use Livewire\Attributes\Title;
use Livewire\Component;

class CreateExpenseCategoryComponent extends Component
{
    #[Title('Expense Category Create')]
    public function render()
    {
        return view('livewire.expense-management.stack.expense-category.create-expense-category-component');
    }
}

<?php

namespace App\Livewire\ExpenseManagement\Stack\ExpenseCategory;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use Livewire\Component;
use Livewire\Attributes\Title;

class UpdateExpenseCategoryComponent extends Component
{
    /**
     * Define public property $response
     * @var array|object
     */
    public $response;

    /**
     * Define public method mount()
     * @return void
     */
    public function mount(ExpenseCategory $expenseCategory): void
    {
        $this->response = $expenseCategory;
        
    }
    #[Title('Update Expense Category')]
    public function render()
    {
        return view('livewire.expense-management.stack.expense-category.update-expense-category-component');
    }
}

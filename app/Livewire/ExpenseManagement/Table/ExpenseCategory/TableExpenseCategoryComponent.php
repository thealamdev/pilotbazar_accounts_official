<?php

namespace App\Livewire\ExpenseManagement\Table\ExpenseCategory;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use Livewire\Component;
use Livewire\Attributes\Title;

class TableExpenseCategoryComponent extends Component
{
    /**
     * Define public property $responses
     * @var array|object
     */
    public $responses;

    /**
     * Define public property $search
     * @var ?string
     */
    public ?string $search = '';

    #[Title('Expense Categories')]
    public function render()
    {
        $this->responses = ExpenseCategory::query()
            ->where('name', 'like', "%{$this->search}%")
            ->latest()->get();
        return view('livewire.expense-management.table.expense-category.table-expense-category-component', ['responses' => $this->responses]);
    }
}

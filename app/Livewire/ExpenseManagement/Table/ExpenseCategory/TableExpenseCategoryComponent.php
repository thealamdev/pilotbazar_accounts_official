<?php

namespace App\Livewire\ExpenseManagement\Table\ExpenseCategory;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use App\Services\ExpenseManagement\Stack\Expense\DeleteExpenseCategoryService;
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

    /**
     * Define public method delete() to erase the instance
     * @var ?string $id
     * @return void
     */
    public function delete(?string $id): void
    {
        $isDelete = DeleteExpenseCategoryService::erase($id);
        $response = $isDelete ? 'Record has been Delete !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
    }

    #[Title('Expense Categories')]
    public function render()
    {
        $this->responses = ExpenseCategory::query()
            ->with('sub_category')
            ->where('name', 'like', "%{$this->search}%")
            ->get();

        return view('livewire.expense-management.table.expense-category.table-expense-category-component', ['responses' => $this->responses]);
    }
}

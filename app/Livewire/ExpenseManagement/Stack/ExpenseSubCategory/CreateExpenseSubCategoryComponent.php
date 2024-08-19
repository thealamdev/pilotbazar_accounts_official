<?php

namespace App\Livewire\ExpenseManagement\Stack\ExpenseSubCategory;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Database\Eloquent\Collection;
use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use App\Livewire\Forms\ExpenseManagement\Expense\CreateExpenseSubCategoryRequest;
use App\Services\ExpenseManagement\Stack\Expense\CreateExpenseSubCategoryService;

class CreateExpenseSubCategoryComponent extends Component
{
    /**
     * Define public form object CreateExpenseSubCategoryRequest $form
     */
    public CreateExpenseSubCategoryRequest $form;

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

    /**
     * Define public method save() to store the resourses.
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
        $isCreate = CreateExpenseSubCategoryService::store($this->form);
        $response = $isCreate ? 'Data has been submited !' : 'Something went wrong!';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Expense Sub Category Create')]
    public function render()
    {
        return view('livewire.expense-management.stack.expense-sub-category.create-expense-sub-category-component');
    }
}

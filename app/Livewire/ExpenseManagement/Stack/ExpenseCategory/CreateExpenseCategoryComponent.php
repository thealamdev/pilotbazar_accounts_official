<?php

namespace App\Livewire\ExpenseManagement\Stack\ExpenseCategory;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\ExpenseManagement\Expense\CreateExpenseCategoryRequest;
use App\Services\ExpenseManagement\Stack\Expense\CreateExpenseCategoryService;

class CreateExpenseCategoryComponent extends Component
{
    /**
     * Define public form object CreateExpenseCategoryRequest $form;
     */
    public CreateExpenseCategoryRequest $form;

    /**
     * Define public method save() to store the resourses
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
        $isCreate = CreateExpenseCategoryService::store($this->form);
        $response = $isCreate ? 'Data has been submited !' : 'Something went wrong!';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Expense Category Create')]
    public function render()
    {
        return view('livewire.expense-management.stack.expense-category.create-expense-category-component');
    }
}

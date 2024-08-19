<?php

namespace App\Livewire\ExpenseManagement\Stack\ExpenseCategory;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use App\Livewire\Forms\ExpenseManagement\Expense\UpdateExpenseCategoryRequest;
use App\Services\ExpenseManagement\Stack\Expense\UpdateExpenseCategoryService;

class UpdateExpenseCategoryComponent extends Component
{
    /**
     * Define public form object UpdateExpenseCategoryRequest $form;
     */
    public UpdateExpenseCategoryRequest $form;

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
        $this->form->name = $expenseCategory->name;
        $this->form->status = $expenseCategory->status;
    }

    /**
     * Define public method update() to update the resourses
     * @return void
     */
    public function update(): void
    {
        $this->form->validate();
        $isCreate = UpdateExpenseCategoryService::adapt($this->form, $this->response);
        $response = $isCreate ? 'Data has been update !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
    }

    #[Title('Update Expense Category')]
    public function render()
    {
        return view('livewire.expense-management.stack.expense-category.update-expense-category-component');
    }
}

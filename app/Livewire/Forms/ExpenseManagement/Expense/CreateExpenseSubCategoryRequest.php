<?php

namespace App\Livewire\Forms\ExpenseManagement\Expense;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateExpenseSubCategoryRequest extends Form
{
    /**
     * Define public expense_category_id
     * @var ?string $expense_category_id
     */
    #[Validate('required')]
    public $expense_category_id;

    /**
     * Define public property $name
     * @var ?string
     */
    #[Validate('required|string|min:1')]
    public $name;

    /**
     * Define public property $status
     * @var ?string
     */
    #[Validate('required|in:0,1')]
    public $status;
}

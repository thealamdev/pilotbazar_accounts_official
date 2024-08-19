<?php

namespace App\Livewire\Forms\ExpenseManagement\DailyExpense;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateDailyExpenseRequest extends Form
{
    /**
     * Define public expense_category_id
     * @var ?string $expense_category_id
     */
    #[Validate('required')]
    public $expense_category_id = false;

    /**
     * Define public property $expense_sub_category_id;
     * @var ?string $expense_sub_category_id
     */
    #[Validate('required')]
    public $expense_sub_category;

    /**
     * Define public property $amount
     * @var ?string
     */
    #[Validate('required|string|min:1')]
    public $amount;

    /**
     * Define public property $status
     * @var ?string
     */
    #[Validate('required|in:0,1')]
    public $status;
}

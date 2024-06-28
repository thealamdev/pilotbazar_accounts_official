<?php

namespace App\Livewire\Forms\VehicleManagement\Dependency\Bank;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreatePblBankRequest extends Form
{
    /**
     * Define public property $name
     * @var string
     */
    #[Validate('required|min:2|unique:pbl_banks')]
    public ?string $name;

    /**
     * Define public property $account_number
     * @var string
     */
    #[Validate('required|min:5|unique:pbl_banks')]
    public ?string $account_number;
}

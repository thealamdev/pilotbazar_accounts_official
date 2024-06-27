<?php

namespace App\Livewire\Forms\VehicleManagement\Modules\Color;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateColorRequest extends Form
{
    /**
     * Define the name property
     * @var string
     */
    #[Validate('required|max:20|unique:colors', as: 'Name')]
    public ?string $name = '';

    /**
     * Define the title property
     * @var string
     */
    #[Validate('required', as: 'Status')]
    public ?string $status = '';
}

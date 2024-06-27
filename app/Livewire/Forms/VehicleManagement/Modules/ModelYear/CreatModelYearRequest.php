<?php

namespace App\Livewire\Forms\VehicleManagement\Modules\ModelYear;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreatModelYearRequest extends Form
{
    /**
     * Define the name property
     * @var string
     */
    #[Validate('required|max:4|unique:model_years', as: 'Name')]
    public ?string $name = '';

    /**
     * Define the title property
     * @var string
     */
    #[Validate('required', as: 'Status')]
    public ?string $status = '';
}

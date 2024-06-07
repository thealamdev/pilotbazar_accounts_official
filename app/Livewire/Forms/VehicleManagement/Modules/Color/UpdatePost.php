<?php

namespace App\Livewire\Forms\VehicleManagement\Modules\Color;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdatePost extends Form
{
    /**
     * Define the name property
     * @var string
     */
    #[Validate('required|max:10', as: 'Name')]
    public ?string $name = '';

    /**
     * Define the title property
     * @var string
     */
    #[Validate('required', as: 'Status')]
    public ?string $status = '';
}

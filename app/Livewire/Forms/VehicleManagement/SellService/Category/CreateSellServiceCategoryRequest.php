<?php

namespace App\Livewire\Forms\VehicleManagement\SellService\Category;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateSellServiceCategoryRequest extends Form
{
    /**
     * Define public property $name
     * @var ?string
     */
    #[Validate('required|min:1')]
    public ?string $name = '';

    /**
     * Define public property $status
     * @var ?integer
     */
    #[Validate('required|in:0,1')]
    public $status;
}

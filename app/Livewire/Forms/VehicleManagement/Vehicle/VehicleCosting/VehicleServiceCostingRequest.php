<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting;

use Livewire\Attributes\Validate;
use Livewire\Form;

class VehicleServiceCostingRequest extends Form
{
    /**
     * Define public property $costing_name
     * @var array
     */
    #[Validate('required|array|min:1')]
    public ?array $costing_name = [];

    /**
     * Define public property $date
     * @var array
     */
    #[Validate('required|array|min:1')]
    public ?array $date = [];

    /**
     * Define public property $amount
     * @var array
     */
    #[Validate('required|array|min:1')]
    public ?array $amount = [];

    /**
     * Define public property $remarks
     * @var array
     */
    #[Validate('nullable|array|min:1')]
    public ?array $remarks = [];
}

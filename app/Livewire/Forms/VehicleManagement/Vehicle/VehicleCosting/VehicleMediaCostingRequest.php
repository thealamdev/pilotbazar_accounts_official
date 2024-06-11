<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting;

use Illuminate\Support\Arr;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VehicleMediaCostingRequest extends Form
{
    /**
     * Define public property $client_name
     * @var array
     */
    #[Validate('required|array|min:1')]
    public ?array $client_name = [];

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
    #[Validate('required|array|min:1')]
    public ?array $remarks = [];
}

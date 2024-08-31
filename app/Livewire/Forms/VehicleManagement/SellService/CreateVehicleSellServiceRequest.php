<?php

namespace App\Livewire\Forms\VehicleManagement\SellService;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateVehicleSellServiceRequest extends Form
{
    /**
     * Define public property $vehicle_id
     * @var ?string
     */
    #[Validate('required')]
    public $vehicle_id;

    /**
     * Define public property $name
     * @var ?string
     */
    #[Validate('required')]
    public $name;

    /**
     * Define public property $amount
     * @var ?string
     */
    #[Validate('required')]
    public $amount;
}

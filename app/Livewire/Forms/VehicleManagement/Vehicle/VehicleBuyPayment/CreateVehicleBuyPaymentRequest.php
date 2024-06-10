<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateVehicleBuyPaymentRequest extends Form
{
    /**
     * Define public property $name.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $name;


    /**
     * Define public property $amount.
     * @var ?double
     */
    #[Validate('required|decimal:0')]
    public $amount;
}

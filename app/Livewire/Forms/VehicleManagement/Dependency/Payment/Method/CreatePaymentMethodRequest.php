<?php

namespace App\Livewire\Forms\VehicleManagement\Dependency\Payment\Method;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreatePaymentMethodRequest extends Form
{
    /**
     * Define public property $name
     * @var string
     */
    #[Validate('required|unique:payment_methods')]
    public $name;

    /**
     * Define public property $status
     * @var string
     */
    #[Validate('required')]
    public $status;
}

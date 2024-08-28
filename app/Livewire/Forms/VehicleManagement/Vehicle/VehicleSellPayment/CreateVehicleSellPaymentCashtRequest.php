<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleSellPayment;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateVehicleSellPaymentCashtRequest extends Form
{
    /**
     * Define public property $account_holder_name.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $account_holder_name = '';

    /**
     * Define public property $date.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $date;

    /**
     * Define public property $amount.
     * @var ?double
     */
    #[Validate('required|decimal:0')]
    public $amount;

    /**
     * Define public property $remarks;
     * @var string
     */
    #[Validate('nullable')]
    public ?string $remarks;
}

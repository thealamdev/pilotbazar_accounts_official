<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateVehicleBuyPaymentRequest extends Form
{
    /**
     * Define public property $client_name.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $client_name;

    /**
     * Define public property $clink_bank.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $clink_bank;

    /**
     * Define public property $client_bank_account_number.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $client_bank_account_number;

    /**
     * Define public property $date.
     * @var ?string
     */
    #[Validate('required|date')]
    public ?string $date;

    /**
     * Define public property $amount.
     * @var ?double
     */
    #[Validate('required|decimal:0')]
    public $amount;
}

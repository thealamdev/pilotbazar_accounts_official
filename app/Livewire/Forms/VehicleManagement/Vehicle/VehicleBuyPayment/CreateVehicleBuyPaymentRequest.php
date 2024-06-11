<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateVehicleBuyPaymentRequest extends Form
{
    /**
     * Define public property $pbl_bank
     * @var ?string
     */
    #[Validate('required')]
    public $pbl_bank;

    /**
     * Define public property $client_name.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $client_name;

    /**
     * Define public property $clienk_bank_name;
     * @var ?string
     */
    #[Validate('required')]
    public ?string $clienk_bank_name;

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
    #[Validate('required')]
    public ?string $date;

    /**
     * Define public property $amount.
     * @var ?double
     */
    #[Validate('required|decimal:0')]
    public $amount;

    /**
     * Define public property $remak;
     * @var string
     */
    #[Validate('nullable')]
    public ?string $remark;
}

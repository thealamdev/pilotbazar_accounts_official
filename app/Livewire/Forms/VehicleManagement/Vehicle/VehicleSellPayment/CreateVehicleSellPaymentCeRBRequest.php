<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleSellPayment;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateVehicleSellPaymentCeRBRequest extends Form
{
    /**
     * Define public property $credit_bank
     * @var ?string
     */
    #[Validate('required')]
    public $credit_bank;

    /**
     * Define public property $account_holder_name.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $account_holder_name;

    /**
     * Define public property $debit_bank_name;
     * @var ?string
     */
    #[Validate('required')]
    public ?string $debit_bank_name;

    /**
     * Define public property $debit_bank_account_number.
     * @var ?string
     */
    #[Validate('required')]
    public ?string $debit_bank_account_number;

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

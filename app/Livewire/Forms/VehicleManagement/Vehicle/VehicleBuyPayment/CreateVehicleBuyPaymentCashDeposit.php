<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateVehicleBuyPaymentCashDeposit extends Form
{
    #[Validate('required')]
    public $cash_credit_amount;
}

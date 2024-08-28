<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleSellPayment;

use Livewire\Attributes\Title;
use Livewire\Component;

class CreateVehicleSellPaymentComponent extends Component
{
    #[Title('Vehicle Sell Payment')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-sell-payment.create-vehicle-sell-payment-component');
    }
}

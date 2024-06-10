<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleBuyPayment;

use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreateVehicleBuyPaymentComponent extends Component
{
    /**
     * Define public property $vehicle_id
     * @var string
     */
    public $vehicle;
    /**
     * Define public property $methods
     * @var string
     */
    public $methods;

    /**
     * Define the mount method
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
        $this->methods = PaymentMethod::query()->latest()->get();
    }

    #[Title('Vehicle Buy Payment')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-buy-payment.create-vehicle-buy-payment-component', ['vehicle' => $this->vehicle, 'methods' => $this->methods]);
    }
}

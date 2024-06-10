<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehiclePaymentMethod;

use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreatVehiclePaymentMethodComponent extends Component
{
    /**
     * Define public property $vehicle_id
     * @var string
     */
    public ?string $vehicle_id;

    /**
     * Define the mount method
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
        $this->vehicle_id = $vehicle->id;
    }

    #[Title('Vehicle Payment Method')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-payment-method.creat-vehicle-payment-method-component', ['vehicle_id' => $this->vehicle_id]);
    }
}

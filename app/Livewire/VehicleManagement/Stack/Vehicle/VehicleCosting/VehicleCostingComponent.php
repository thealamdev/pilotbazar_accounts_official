<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleCosting;

use Livewire\Component;
use App\Models\VehicleManagement\Vehicle\Vehicle;

class VehicleCostingComponent extends Component
{
    /**
     * Define public property $vehicle
     * @var array|object
     */
    public ?object $vehicle;

    /**
     * Define the mount method
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-costing.vehicle-costing-component');
    }
}

<?php

namespace App\Livewire\InvestorManagement\Stack\InvestedVehicle;

use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreateInvestedVehicleComponent extends Component
{
    /**
     * Define public property $vehicle
     */
    public $vehicles;

    /**
     * Define public method mount()
     */
    public function mount()
    {
        $this->vehicles = Vehicle::query()->latest()->get();
    }

    #[Title('Invested Vehicle Create')]
    public function render()
    {
        return view('livewire.investor-management.stack.invested-vehicle.create-invested-vehicle-component');
    }
}

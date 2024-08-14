<?php

namespace App\Livewire\InvestorManagement\Stack\InvestedVehicle;

use App\Models\InvestorManagement\InvestedVehicle;
use Livewire\Component;
use App\Models\InvestorManagement\Investor;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Attributes\Title;

class UpdateInvestedVehicleComponent extends Component
{
    /**
     * Define public property $vehicle
     */
    public $vehicles;

    /**
     * Define public property $investedVehicle
     */
    public $investedVehicle;

    /**
     * Define public property $investor
     */
    public ?string $investor;

    /**
     * Define public method mount()
     */
    public function mount(Investor $investor, InvestedVehicle $investedVehicle)
    {
        $this->investedVehicle = $investedVehicle;
        $this->investor = $investor->id;
        $this->vehicles = Vehicle::query()->latest()->get();
    }

    /**
     * Define public method update() to update the resourses
     */
    public function update()
    {
        dd('Hi');
    }

    #[Title('Invested Vehicle Update')]
    public function render()
    {
        return view('livewire.investor-management.stack.invested-vehicle.update-invested-vehicle-component');
    }
}

<?php

namespace App\Livewire\VehicleManagement\Table\Vehicle;

use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Component;
use Livewire\Attributes\Title;

class TableComponent extends Component
{
    /**
     * Define property $responses
     * @var array|object
     */
    public $responses = [];

    #[Title('Vehicles')]
    public function render()
    {
        $this->responses = Vehicle::query()->latest()->where('status', 1)->get();
        return view('livewire.vehicle-management.table.vehicle.table-component', ['responses'  => $this->responses]);
    }
}

<?php

namespace App\Livewire\VehicleManagement\Table\Vehicle;

use Livewire\Component;
use Livewire\Attributes\Title;

class TableComponent extends Component
{
    #[Title('Vehicles')]
    public function render()
    {
        return view('livewire.vehicle-management.table.vehicle.table-component');
    }
}

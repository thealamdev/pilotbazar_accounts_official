<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreateComponent extends Component
{
    #[Title('Vehicle Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.create-component');
    }
}

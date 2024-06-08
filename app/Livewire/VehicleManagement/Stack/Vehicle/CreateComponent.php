<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreateComponent extends Component
{
    /**
     * public property $name
     * @var string
     */
    public $name;

    /**
     * public property $status
     * @var string
     */
    public $status;



    #[Title('Vehicle Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.create-component');
    }
}

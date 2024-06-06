<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Color;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreateComponent extends Component
{
    #[Title('Color Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.color.create-component');
    }
}

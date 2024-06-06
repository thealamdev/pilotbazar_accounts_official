<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Model;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreateComponent extends Component
{
    #[Title('Model Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.model.create-component');
    }
}

<?php

namespace App\Livewire\VehicleManagement\Stack\Dependency\Payment\Method;

use Livewire\Attributes\Title;
use Livewire\Component;

class UpdateMethodComponent extends Component
{
    #[Title('Update Payment Method')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.dependency.payment.method.update-method-component');
    }
}

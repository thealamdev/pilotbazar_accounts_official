<?php

namespace App\Livewire\VehicleManagement\Stack\Dependency\Bank;

use Livewire\Attributes\Title;
use Livewire\Component;

class CreatePblBankComponent extends Component
{
    #[Title('Create PBL Bank')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.dependency.bank.create-pbl-bank-component');
    }
}

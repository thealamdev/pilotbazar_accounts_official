<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Color;

use App\Models\VehicleManagement\Modules\Color;
use App\Services\VehicleManagement\Stack\Modules\Color\CreateColor;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreateComponent extends Component
{
    /**
     * @var <array>
     * public property $form
     */
    public $form = [];

    /**
     * method for save data
     * @return array|object
     */
    public function save(): array|object
    {
        $isCreate = CreateColor::store($this->form);
        $response = $isCreate ? 'Data Insert Successfull' : 'Sorry ! Some problem happend';
        return back()->with('success', $response);
    }
    #[Title('Color Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.color.create-component');
    }
}

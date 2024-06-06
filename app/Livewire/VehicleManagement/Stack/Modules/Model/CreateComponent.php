<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Model;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\Models;

class CreateComponent extends Component
{
    /**
     * @var <string>
     * public property $name
     */
    public $name = '';

    /**
     * @var <boolean>
     * public property $status
     */
    public $status;

    /**
     * method for save data
     * @return array|object
     */
    public function save(): array|object
    {
        dd($this->name);
        $response = Models::create([
            'user_id' => auth()->user()->id,
            'name' => $this->name,
            'status' => $this->status,
        ]);

        return back()->with('success', 'Data has been submited');
    }

    #[Title('Model Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.model.create-component');
    }
}

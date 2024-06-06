<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Color;

use App\Models\VehicleManagement\Modules\Color;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;

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

    #[Title('Color Create')]
    /**
     * method for save data
     * @return array|object
     */
    public function save(): array|object
    {
        $response = Color::create([
            'user_id' => auth()->user()->id,
            'name' => $this->name,
            'status' => $this->status,
        ]);

        return back()->with('success', 'Data has been submited');
    }
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.color.create-component');
    }
}

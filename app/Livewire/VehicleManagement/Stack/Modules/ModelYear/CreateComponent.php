<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\ModelYear;

use App\Models\VehicleManagement\Modules\ModelYear;
use Livewire\Component;
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

    /**
     * method for save data
     * @return array|object
     */
    public function save(): array|object
    {
        dd($this->name);
        $response = ModelYear::create([
            'user_id' => auth()->user()->id,
            'name' => $this->name,
            'status' => $this->status,
        ]);

        return back()->with('success', 'Data has been submited');
    }

    #[Title('Model Year Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.model-year.create-component');
    }
}

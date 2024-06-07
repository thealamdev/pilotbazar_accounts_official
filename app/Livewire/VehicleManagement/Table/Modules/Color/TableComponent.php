<?php

namespace App\Livewire\VehicleManagement\Table\Modules\Color;

use App\Models\VehicleManagement\Modules\Color;
use Livewire\Component;
use Livewire\Attributes\Title;

class TableComponent extends Component
{
    /**
     * @var array|object
     * public property $responses
     */
    public $responses;

    #[Title('Colors')]
    public function render()
    {
        $this->responses = Color::query()->latest()
            ->with('user')
            ->get();
        return view('livewire.vehicle-management.table.modules.color.table-component', ['responses' => $this->responses]);
    }
}

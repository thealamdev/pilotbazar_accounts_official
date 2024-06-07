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
        $responses = Color::query()->latest()->where('status', 1)->paginate(10);
        return view('livewire.vehicle-management.table.modules.color.table-component', ['responses' => $this->responses]);
    }
}

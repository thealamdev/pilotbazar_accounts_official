<?php

namespace App\Livewire\VehicleManagement\Table\Modules\ModelYear;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\ModelYear;

class TableComponent extends Component
{
    /**
     * @var array|object
     * public property $responses
     */
    public $responses;

    #[Title('Model Years')]
    public function render()
    {
        $this->responses = ModelYear::query()->latest()
        ->with('user')
        ->get();
        return view('livewire.vehicle-management.table.modules.model-year.table-component');
    }
}

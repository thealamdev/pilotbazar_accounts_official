<?php

namespace App\Livewire\VehicleManagement\Table\Modules\ModelYear;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\ModelYear;

class TableModelYearComponent extends Component
{
    /**
     * @var array|object
     * public property $responses
     */
    public $responses;

    /**
     * @var string
     * public property $search
     */
    public ?string $search = '';

    #[Title('Model Years')]
    public function render()
    {
        $this->responses = ModelYear::query()->latest()
            ->where('name', 'like', "%{$this->search}%")
            ->with('user')
            ->get();
        return view('livewire.vehicle-management.table.modules.model-year.table-model-year-component');
    }
}

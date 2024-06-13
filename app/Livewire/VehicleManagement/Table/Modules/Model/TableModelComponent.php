<?php

namespace App\Livewire\VehicleManagement\Table\Modules\Model;

use App\Models\VehicleManagement\Modules\Models;
use Livewire\Attributes\Title;
use Livewire\Component;

class TableModelComponent extends Component
{
    /**
     * Define public property $responses
     * @return object 
     */
    public $responses;

    /**
     * Define public property $search
     * @return object 
     */
    public $search;

    #[Title('Models')]
    public function render()
    {
        $this->responses = Models::query()->latest()->where('name', 'like', "%{$this->search}%")->get();
        return view('livewire.vehicle-management.table.modules.model.table-model-component');
    }
}

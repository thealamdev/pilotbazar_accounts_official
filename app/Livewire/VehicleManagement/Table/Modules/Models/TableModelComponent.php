<?php

namespace App\Livewire\VehicleManagement\Table\Modules\Models;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\Models;
use App\Services\VehicleManagement\Stack\Modules\Models\DeleteModelService;

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

    /**
     * Define public method delete
     * @return void
     */
    public function delete(string $id)
    {
        $isDelete = DeleteModelService::erase($id);
        $response = $isDelete ? 'Record has been Delete !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
    }

    #[Title('Models')]
    public function render()
    {
        $this->responses = Models::query()->latest()->where('name', 'like', "%{$this->search}%")->get();
        return view('livewire.vehicle-management.table.modules.models.table-model-component');
    }
}

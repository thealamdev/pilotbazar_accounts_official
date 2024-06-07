<?php

namespace App\Livewire\VehicleManagement\Table\Modules\Color;

use App\Models\VehicleManagement\Modules\Color;
use App\Services\VehicleManagement\Stack\Modules\Color\DeleteColorService;
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

    /**
     * public delete method 
     * @return void
     */
    public function delete(string $id): void
    {
        $isDelete = DeleteColorService::erase($id);
        $response = $isDelete ? 'Record has been Delete !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
    }
}

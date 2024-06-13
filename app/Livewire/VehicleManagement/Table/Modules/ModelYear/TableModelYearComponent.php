<?php

namespace App\Livewire\VehicleManagement\Table\Modules\ModelYear;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\ModelYear;
use App\Services\VehicleManagement\Stack\Modules\ModelYear\DeleteModelYearService;

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

    /**
     * Define public method delete for delete the record
     * @return void
     */
    public function delete(string $id)
    {
        $isDelete = DeleteModelYearService::erase($id);
        $response = $isDelete ? 'Record has been Delete !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
    }

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

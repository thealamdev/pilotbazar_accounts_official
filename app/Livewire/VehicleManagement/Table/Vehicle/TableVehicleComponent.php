<?php

namespace App\Livewire\VehicleManagement\Table\Vehicle;

use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class TableVehicleComponent extends Component
{
    use WithPagination;
    /**
     * public property $search
     * @var string
     */
    public ?string $search = '';

    /**
     * Define public delete method for delete perticular item
     * @return void
     */
    public function delete(string $id)
    {
        Vehicle::find($id)->delete();
        $this->dispatch('success', ['message' => 'Data deleted successfully']);
    }

    #[Title('Vehicles')]
    public function render()
    {
        $responses = Vehicle::query()
            ->latest()
            ->with('color')
            ->where('status', 1)
            ->where('name', 'like', "%{$this->search}%")
            ->paginate(10);
        return view('livewire.vehicle-management.table.vehicle.table-vehicle-component', ['responses'  =>  $responses]);
    }
}

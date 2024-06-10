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

    #[Title('Vehicles')]
    public function render()
    {
        $responses = Vehicle::query()
            ->latest()
            ->with('color')
            ->where('status', 1)
            ->where('name', 'like', "%{$this->search}%")
            ->paginate(10);
        return view('livewire.vehicle-management.table.vehicle.table-component', ['responses'  =>  $responses]);
    }
}

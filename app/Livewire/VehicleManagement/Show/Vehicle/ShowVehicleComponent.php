<?php

namespace App\Livewire\VehicleManagement\Show\Vehicle;

use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowVehicleComponent extends Component
{
    /**
     * Define public property $responses
     * @var array|object
     */
    public ?object $responses;

    /**
     * Define public mount method 
     * @return void
     */
    public function mount($vehicle): void
    {
        $this->responses = Vehicle::query()
            ->where('id', $vehicle)
            ->with('user', 'color', 'models', 'model_year', 'buyPayments', 'mediaCosting')
            ->first();
    }

    #[Title('Vehicle | Show')]
    public function render()
    {
        return view('livewire.vehicle-management.show.vehicle.show-vehicle-component', ['responses' => $this->responses]);
    }
}

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
    public ?object $response;

    /**
     * Define public mount method 
     * @return void
     */
    public function mount($vehicle): void
    {
        $this->response = Vehicle::query()
            ->where('id', $vehicle)
            ->with('user', 'color', 'models', 'model_year', 'mediaCosting','maintenanceCosting')
            ->with('buyPayments', function ($q) {
                $q->with('paymentMethod');
            })
            ->first();
    }

    #[Title('Vehicle | Show')]
    public function render()
    {
        return view('livewire.vehicle-management.show.vehicle.show-vehicle-component', ['response' => $this->response]);
    }
}

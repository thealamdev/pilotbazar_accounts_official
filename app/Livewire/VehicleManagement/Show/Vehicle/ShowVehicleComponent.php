<?php

namespace App\Livewire\VehicleManagement\Show\Vehicle;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCosting;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCostingRequest;

class ShowVehicleComponent extends Component
{
    /**
     * Define public object mediaCostingUpdate $form
     */

    /**
     *  Define public property $vehicleMediaCostingRequest.
     * @var array|object
     */
    public VehicleMediaCostingRequest $vehicleMediaCostingRequest;

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
            ->with('user', 'color', 'models', 'model_year', 'mediaCosting', 'maintenanceCosting', 'serviceCosting', 'partsCosting')
            ->with('buyPayments', fn($query) => $query->with('paymentMethod'))
            ->first();
    }

    /**
     * Define public method mediaCostUpdate to update media costing
     * @var ?string $id
     */
    public function mediaCostingUpdate(?string $id)
    {
        $this->validate();
        $this->vehicleMediaCostingRequest = VehicleMediaCosting::query()->get();
    }

    #[Title('Vehicle | Show')]
    public function render()
    {
        return view('livewire.vehicle-management.show.vehicle.show-vehicle-component', ['response' => $this->response, 'vehicleMediaCostingRequest' => $this->vehicleMediaCostingRequest]);
    }
}

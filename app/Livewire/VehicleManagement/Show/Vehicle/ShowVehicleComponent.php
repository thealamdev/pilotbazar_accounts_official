<?php

namespace App\Livewire\VehicleManagement\Show\Vehicle;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCosting;
use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleServiceCosting;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCostingUpdateRequest;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleServiceCostingUpdateRequest;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleMaintenanceCostingUpdateRequest;
use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleMaintenanceCosting;

class ShowVehicleComponent extends Component
{
    /**
     * Define public object VehicleMediaCostingRequest $vehicleMediaCostingRequest
     */
    public VehicleMediaCostingUpdateRequest $vehicleMediaCostingUpdateRequest;

    /**
     * Define public object VehicleServiceCostingUpdateRequest $vehicleServiceCostingUpdateRequest;
     */
    public VehicleServiceCostingUpdateRequest $vehicleServiceCostingUpdateRequest;

    /**
     * Define public object VehicleMaintenanceCostingUpdateRequest $vehicleMaintenanceCostingUpdateRequest;
     */
    public VehicleMaintenanceCostingUpdateRequest $vehicleMaintenanceCostingUpdateRequest;

    /**
     *  Define public property $mediaCostingUpdateResponse.
     * @var array|object
     */
    public $mediaCostingUpdateResponse;

    /**
     * Define public property $serviceCostingUpdateResponse
     * @var array|object
     */
    public $serviceCostingUpdateResponse;

    /**
     * Define public property $maintenanceCostingUpdateResponse
     * @var array|object
     */
    public $maintenanceCostingUpdateResponse;

    /**
     * Define public property $responses
     * @var array|object
     */
    public ?object $response;

    /**
     * Define public mount method 
     * @param ?string $vehicle
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
     * @return void
     */
    public function mediaCostingUpdate(?string $id): void
    {
        $this->mediaCostingUpdateResponse = VehicleMediaCosting::query()->where('id', $id)->first();
        $this->VehicleMediaCostingUpdateRequest->id = $this->mediaCostingUpdateResponse->id;
        $this->VehicleMediaCostingUpdateRequest->costing_name = $this->mediaCostingUpdateResponse->costing_name;
        $this->VehicleMediaCostingUpdateRequest->amount = $this->mediaCostingUpdateResponse->amount;
        $this->VehicleMediaCostingUpdateRequest->date = $this->mediaCostingUpdateResponse->date;
        $this->VehicleMediaCostingUpdateRequest->remarks = $this->mediaCostingUpdateResponse->remarks;
    }

    /**
     * Define public method mediaCostUpdate()
     * @return void
     */
    public function mediaCostUpdate(): void
    {
        $this->validate();
        $response = VehicleMediaCosting::where('id', $this->vehicleMediaUpdateRequest->id)->first();
        $response->update([
            'costing_name' => $this->vehicleMediaUpdateRequest->costing_name,
            'amount' => $this->vehicleMediaUpdateRequest->amount,
            'date' => $this->vehicleMediaUpdateRequest->date,
            'remarks' => $this->vehicleMediaUpdateRequest->remarks,
        ]);
        $this->dispatch('success', ['message' => 'Media Costing has been uploaded']);
    }

    /**
     * Define public method serviceCostingUpdate() to update service costing page
     * @var ?string $id
     * @return void
     */
    public function serviceCostingUpdate(?string $id): void
    {
        $this->serviceCostingUpdateResponse = VehicleServiceCosting::query()->where('id', $id)->first();
        $this->vehicleServiceCostingUpdateRequest->id = $this->serviceCostingUpdateResponse->id;
        $this->vehicleServiceCostingUpdateRequest->costing_name = $this->serviceCostingUpdateResponse->costing_name;
        $this->vehicleServiceCostingUpdateRequest->amount = $this->serviceCostingUpdateResponse->amount;
        $this->vehicleServiceCostingUpdateRequest->date = $this->serviceCostingUpdateResponse->date;
        $this->vehicleServiceCostingUpdateRequest->remarks = $this->serviceCostingUpdateResponse->remarks;
    }

    /**
     * Define public method serviceCostUpdate()
     * @return void
     */
    public function serviceCostUpdate(): void
    {
        $this->vehicleServiceCostingUpdateRequest->validate();
        $response = VehicleServiceCosting::where('id', $this->vehicleServiceCostingUpdateRequest->id)->first();
        $response->update([
            'costing_name' => $this->vehicleServiceCostingUpdateRequest->costing_name,
            'amount' => $this->vehicleServiceCostingUpdateRequest->amount,
            'date' => $this->vehicleServiceCostingUpdateRequest->date,
            'remarks' => $this->vehicleServiceCostingUpdateRequest->remarks,
        ]);
        $this->dispatch('success', ['message' => 'Service Costing has been uploaded']);
    }

    /**
     * Define public method maintenanceCostingUpdate() to update maintenance costing page
     * @var ?string $id
     * @return void
     */
    public function maintenanceCostingUpdate(?string $id): void
    {
        $this->maintenanceCostingUpdateResponse = VehicleMaintenanceCosting::query()->where('id', $id)->first();
        $this->vehicleMaintenanceCostingUpdateRequest->id = $this->maintenanceCostingUpdateResponse->id;
        $this->vehicleMaintenanceCostingUpdateRequest->costing_name = $this->maintenanceCostingUpdateResponse->costing_name;
        $this->vehicleMaintenanceCostingUpdateRequest->amount = $this->maintenanceCostingUpdateResponse->amount;
        $this->vehicleMaintenanceCostingUpdateRequest->date = $this->maintenanceCostingUpdateResponse->date;
        $this->vehicleMaintenanceCostingUpdateRequest->remarks = $this->maintenanceCostingUpdateResponse->remarks;
    }

    /**
     * Define public method maintenanceCostUpdate()
     * @return void
     */
    public function maintenanceCostUpdate(): void
    {
        $this->vehicleMaintenanceCostingUpdateRequest->validate();
        $response = VehicleMaintenanceCosting::where('id', $this->vehicleMaintenanceCostingUpdateRequest->id)->first();
        $response->update([
            'costing_name' => $this->vehicleMaintenanceCostingUpdateRequest->costing_name,
            'amount' => $this->vehicleMaintenanceCostingUpdateRequest->amount,
            'date' => $this->vehicleMaintenanceCostingUpdateRequest->date,
            'remarks' => $this->vehicleMaintenanceCostingUpdateRequest->remarks,
        ]);
        $this->dispatch('success', ['message' => 'Maintenance Costing has been uploaded']);
    }

    #[Title('Vehicle | Show')]
    public function render()
    {
        return view('livewire.vehicle-management.show.vehicle.show-vehicle-component', [
            'response' => $this->response,
            'mediaCostingUpdateResponse' => $this->mediaCostingUpdateResponse,
            'serviceCostingUpdateResponse' => $this->serviceCostingUpdateResponse
        ]);
    }
}

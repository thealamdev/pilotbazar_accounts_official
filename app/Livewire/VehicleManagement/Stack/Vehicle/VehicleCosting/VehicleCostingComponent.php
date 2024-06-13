<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleCosting;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCostingRequest;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehiclePartsCostingRequest;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleServiceCostingRequest;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleMaintenanceCostingRequest;
use App\Services\VehicleManagement\Stack\Vehicle\VehicleCosting\CreateVehicleMediaCostingService;
use App\Services\VehicleManagement\Stack\Vehicle\VehicleCosting\CreateVehiclePartsCostingService;
use App\Services\VehicleManagement\Stack\Vehicle\VehicleCosting\CreateVehicleServiceCostingService;
use App\Services\VehicleManagement\Stack\Vehicle\VehicleCosting\CreateVehicleMaintenanceCostingService;

class VehicleCostingComponent extends Component
{
    /**
     * Define form object $form
     * @var object
     */
    public VehicleMediaCostingRequest $vehicleMediaCostingRequest;

    /**
     * Define form object $vehicleMaintenanceCostingRequest
     */
    public VehicleMaintenanceCostingRequest $vehicleMaintenanceCostingRequest;

    /**
     * Define form object $vehicleServiceCostingRequest
     */
    public VehicleServiceCostingRequest $vehicleServiceCostingRequest;

    /**
     * Define form object $vehiclePartsCostingRequest;
     */
    public VehiclePartsCostingRequest $vehiclePartsCostingRequest;

    /**
     * Define public property $mediaCostingForm;
     * @var string
     */
    public ?string $mediaCostingForm = 'no';

    /**
     * Define public property $maintenanceCostingForm;
     * @var string
     */
    public ?string $maintenanceCostingForm = 'no';

    /**
     * Define public property $serviceCostingForm;
     * @var string
     */
    public ?string $serviceCostingForm = 'no';

    /**
     * Define public property $partsCostingForm;
     * @var string
     */
    public ?string $partsCostingForm = 'no';

    /**
     * Define public property $mediaCostFormLen
     */
    public $mediaCostFormLen = 1;

    /**
     * Define public property $mediaCostFormLen
     */
    public $maintenanceCostingFormLen = 1;

    /**
     * Define public property $serviceCostFormLen
     */
    public $serviceCostFormLen = 1;

    /**
     * Define public property $partsCostFormLen
     */
    public $partsCostFormLen = 1;

    /**
     * Define public property $vehicle
     * @var array|object
     */
    public ?object $vehicle;

    /**
     * Define public method updatedmediaCostingForm() for update $mediaCostingForm
     * @return void
     */
    public function mediaCostingFormStatus(): void
    {
        $this->mediaCostingForm = $this->mediaCostingForm == 'no'  ? 'yes' : 'no';
    }

    /**
     * Define public method maintenanceCostingFormStatus() for update $maintenanceCostingForm
     * @return void
     */
    public function maintenanceCostingFormStatus(): void
    {
        $this->maintenanceCostingForm = $this->maintenanceCostingForm == 'no'  ? 'yes' : 'no';
    }

    /**
     * Define public method serviceCostingFormStatus() for update $serviceCostingForm
     * @return void
     */
    public function serviceCostingFormStatus(): void
    {
        $this->serviceCostingForm = $this->serviceCostingForm == 'no' ? 'yes' : 'no';
    }

    /**
     * Define public method partsCostingFormStatus() for update $partsCostingFormStatus
     * @return void
     */
    public function partsCostingFormStatus(): void
    {
        $this->partsCostingForm = $this->partsCostingForm == 'no' ? 'yes' : 'no';
    }

    /**
     * Define public method mediaCostFormLenIncrement() for increment the mediaCostingFormLen
     * @return void
     */
    public function mediaCostFormLenIncrement()
    {
        $this->mediaCostFormLen++;
    }

    /**
     * Define public method maintenanceCostFormLenIncrement() for increment the maintenanceCostingFormLen
     * @return void
     */
    public function maintenanceCostFormLenIncrement()
    {
        $this->maintenanceCostingFormLen++;
    }

    /**
     * Define public method serviceCostFormLenIncrement() for increment the serviceCostingFormLen
     * @return void
     */
    public function serviceCostFormLenIncrement()
    {
        $this->serviceCostFormLen++;
    }

    /**
     * Define public method partsCostFormLenIncrement() for increment the partsCostingFormLen
     * @return void
     */
    public function partsCostFormLenIncrement()
    {
        $this->partsCostFormLen++;
    }

    /**
     * Define the mount method
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    /**
     * Define public method saveMediaCost() for save the record
     * @return void
     */
    public function saveMediaCost(): void
    {
        $this->vehicleMediaCostingRequest->validate();
        $isCreate = CreateVehicleMediaCostingService::store($this->vehicleMediaCostingRequest, $this->vehicle);
        $response = $isCreate ? 'Data has been submitted !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->vehicleMediaCostingRequest->reset();
    }

    /**
     * Define public method saveServiceCost() for save the record
     * @var void
     */
    public function saveServiceCost(): void
    {
        $this->vehicleServiceCostingRequest->validate();
        $isCreate = CreateVehicleServiceCostingService::store($this->vehicleServiceCostingRequest, $this->vehicle);
        $response = $isCreate ? 'Data has been submitted !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->vehicleServiceCostingRequest->reset();
    }

    /**
     * Define public method saveMaintenanceCost()
     * @return void
     */
    public function saveMaintenanceCost(): void
    {
        $this->vehicleMaintenanceCostingRequest->validate();
        $isCreate = CreateVehicleMaintenanceCostingService::store($this->vehicleMaintenanceCostingRequest, $this->vehicle);
        $response = $isCreate ? 'Data has been submitted !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->vehicleMaintenanceCostingRequest->reset();
    }

    /**
     * Define public method savePartsCost()
     * @return void
     */
    public function savePartsCost(): void
    {
        $this->vehiclePartsCostingRequest->validate();
        $isCreate = CreateVehiclePartsCostingService::store($this->vehiclePartsCostingRequest, $this->vehicle);
        $response = $isCreate ? 'Data has been submitted !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->vehiclePartsCostingRequest->reset();
    }

    #[Title('Vehicle Costings')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-costing.vehicle-costing-component');
    }
}

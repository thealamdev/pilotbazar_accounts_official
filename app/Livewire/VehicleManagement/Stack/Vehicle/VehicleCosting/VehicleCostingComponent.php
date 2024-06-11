<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleCosting;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCostingRequest;
use App\Services\VehicleManagement\Stack\Vehicle\VehicleCosting\CreateVehicleCostingService;

class VehicleCostingComponent extends Component
{
    /**
     * Define form object $form
     * @var object
     */
    public VehicleMediaCostingRequest $vehicleMediaCostingRequest;

    /**
     * Define public property $mediaCostingForm;
     * @var bool
     */
    public $mediaCostingForm = 'no';

    /**
     * Define public property $maintenanceCostingForm;
     * @var bool
     */
    public $maintenanceCostingForm = 'no';

    /**
     * Define public property $mediaCostFormLen
     */
    public $mediaCostFormLen = 1;

    /**
     * Define public property $mediaCostFormLen
     */
    public $maintenanceCostingFormLen = 1;

    /**
     * Define public property $vehicle
     * @var array|object
     */
    public ?object $vehicle;

    /**
     * Define public method updatedmediaCostingForm() for update $mediaCostingForm
     * @return void
     */
    public function mediaCostingFormStatus()
    {
        $this->mediaCostingForm = $this->mediaCostingForm == 'no'  ? 'yes' : 'no';
    }

    /**
     * Define public method maintenanceCostingFormStatus() for update $maintenanceCostingForm
     * @return void
     */
    public function maintenanceCostingFormStatus()
    {
        $this->maintenanceCostingForm = $this->maintenanceCostingForm == 'no'  ? 'yes' : 'no';
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
    public function saveMediaCost()
    {
        $this->vehicleMediaCostingRequest->validate();
        $isCreate = CreateVehicleCostingService::store($this->vehicleMediaCostingRequest, $this->vehicle);
        $response = $isCreate ? 'Data has been submitted !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->vehicleMediaCostingRequest->reset();
    }

    #[Title('Vehicle Costings')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-costing.vehicle-costing-component');
    }
}

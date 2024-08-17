<?php

namespace App\Livewire\VehicleManagement\Show\Vehicle;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCosting;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaUpdateRequest;

class ShowVehicleComponent extends Component
{
    /**
     * Define public object VehicleMediaCostingRequest $vehicleMediaCostingRequest
     */
    public VehicleMediaUpdateRequest $vehicleMediaUpdateRequest;

    /**
     *  Define public property $mediaCostingUpdateResponse.
     * @var array|object
     */
    public $mediaCostingUpdateResponse;


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
     */
    public function mediaCostingUpdate(?string $id)
    {
        $this->mediaCostingUpdateResponse = VehicleMediaCosting::query()->where('id', $id)->first();
        $this->vehicleMediaUpdateRequest->id = $this->mediaCostingUpdateResponse->id;
        $this->vehicleMediaUpdateRequest->costing_name = $this->mediaCostingUpdateResponse->costing_name;
        $this->vehicleMediaUpdateRequest->amount = $this->mediaCostingUpdateResponse->amount;
        $this->vehicleMediaUpdateRequest->date = $this->mediaCostingUpdateResponse->date;
        $this->vehicleMediaUpdateRequest->remarks = $this->mediaCostingUpdateResponse->remarks;
    }

    /**
     * Define public method mediaCostUpdate()
     */
    public function mediaCostUpdate()
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

    #[Title('Vehicle | Show')]
    public function render()
    {
        return view('livewire.vehicle-management.show.vehicle.show-vehicle-component', ['response' => $this->response, 'mediaCostingUpdateResponse' => $this->mediaCostingUpdateResponse]);
    }
}

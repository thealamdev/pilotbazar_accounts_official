<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleCosting;

use Livewire\Component;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Attributes\Title;

class VehicleCostingComponent extends Component
{
    /**
     * Define public property $mediaCostingForm;
     * @var bool
     */
    public $mediaCostingForm = 'no';

    /**
     * Define public property $mediaCostFormLen
     */
    public $mediaCostFormLen = 1;

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
     * Define public method mediaCostFormLenIncrement() for increment the mediaCostingForm
     * @return void
     */
    public function mediaCostFormLenIncrement()
    {
        $this->mediaCostFormLen++;
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
        dd('Hi');
    }

    #[Title('Vehicle Costings')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-costing.vehicle-costing-component', ['mediaCostingForm' => $this->mediaCostingForm, 'mediaCostFormLen' => $this->mediaCostFormLen]);
    }
}

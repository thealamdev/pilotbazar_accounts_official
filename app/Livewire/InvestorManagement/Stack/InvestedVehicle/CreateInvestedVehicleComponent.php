<?php

namespace App\Livewire\InvestorManagement\Stack\InvestedVehicle;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Livewire\Forms\InvestorManagement\InvestedVehicle\CreateInvestedVehicleRequest;

class CreateInvestedVehicleComponent extends Component
{
    /**
     * Define public form object CreateInvestedVehicleRequest $form;
     */
    public CreateInvestedVehicleRequest $form;

    /**
     * Define public property $vehicle
     */
    public $vehicles;

    /**
     * Define public method mount()
     */
    public function mount()
    {
        $this->vehicles = Vehicle::query()->latest()->get();
    }

    /**
     * Define public method save() to store the resourse
     * @return void
     */
    public function save(): void
    {
        $this->validate($this->form->rules(), attributes: $this->form->attributes());
    }

    #[Title('Invested Vehicle Create')]
    public function render()
    {
        return view('livewire.investor-management.stack.invested-vehicle.create-invested-vehicle-component');
    }
}

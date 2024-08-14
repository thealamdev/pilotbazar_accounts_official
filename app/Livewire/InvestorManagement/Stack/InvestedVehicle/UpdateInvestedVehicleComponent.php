<?php

namespace App\Livewire\InvestorManagement\Stack\InvestedVehicle;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\InvestorManagement\Investor;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Models\InvestorManagement\InvestedVehicle;
use App\Livewire\Forms\InvestorManagement\InvestedVehicle\UpdateInvestedVehicleRequest;
use App\Services\InvestorManagement\Stack\InvestedVehicle\UpdateInvestedVehicleService;

class UpdateInvestedVehicleComponent extends Component
{
    /**
     * Define public form object UpdateInvestedVehicleRequest $form 
     */
    public UpdateInvestedVehicleRequest $form;

    /**
     * Define public property $vehicle
     */
    public $vehicles;

    /**
     * Define public property $investedVehicle
     */
    public $investedVehicle;

    /**
     * Define public property $investor
     */
    public ?string $investor;

    /**
     * Define public method mount()
     */
    public function mount(Investor $investor, InvestedVehicle $investedVehicle)
    {
        $this->form->invested_amount = $investedVehicle->invested_amount;
        $this->form->profit_percentage = $investedVehicle->profit_percentage;
        $this->form->vehicle_id = $investedVehicle->vehicle_id;
        $this->investedVehicle = $investedVehicle;
        $this->investor = $investor->id;
        $this->vehicles = Vehicle::query()->latest()->get();
    }

    /**
     * Define public method update() to update the resourses
     * @return void
     */
    public function update(): void
    {
        $this->validate(rules: $this->form->rules(), attributes: $this->form->attributes());
        $isCreate = UpdateInvestedVehicleService::adapt($this->form, $this->investor, $this->investedVehicle);
        $response = $isCreate ? 'Data has been submited !' : 'Something went wrong!';
        $this->dispatch('success', ['message' => $response]);
    }

    #[Title('Invested Vehicle Update')]
    public function render()
    {
        return view('livewire.investor-management.stack.invested-vehicle.update-invested-vehicle-component');
    }
}

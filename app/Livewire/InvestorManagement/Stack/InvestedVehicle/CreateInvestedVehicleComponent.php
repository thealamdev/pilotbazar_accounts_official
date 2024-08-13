<?php

namespace App\Livewire\InvestorManagement\Stack\InvestedVehicle;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Services\InvestorManagement\Stack\Investor\CreateInvestorService;
use App\Livewire\Forms\InvestorManagement\InvestedVehicle\CreateInvestedVehicleRequest;
use App\Models\InvestorManagement\Investor;
use App\Services\InvestorManagement\Stack\InvestedVehicle\CreateInvestedVehicleService;

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
     * Define public property $investor
     */
    public ?string $investor;

    /**
     * Define public method mount()
     */
    public function mount(Investor $investor)
    {
        $this->investor = $investor->id;
        $this->vehicles = Vehicle::query()->latest()->get();
    }

    /**
     * Define public method save() to store the resourse
     * @return void
     */
    public function save(): void
    {
        $this->validate(rules:$this->form->rules(), attributes: $this->form->attributes());
        $isCreate = CreateInvestedVehicleService::store($this->form, $this->investor);
        $response = $isCreate ? 'Data has been submited !' : 'Something went wrong!';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Invested Vehicle Create')]
    public function render()
    {
        return view('livewire.investor-management.stack.invested-vehicle.create-invested-vehicle-component');
    }
}

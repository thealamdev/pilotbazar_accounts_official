<?php

namespace App\Livewire\InvestorManagement\Stack\InvestedVehicle;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Livewire\Forms\InvestorManagement\InvestedVehicle\CreateInvestedVehicleRequest;
use App\Models\InvestorManagement\Investor;
use App\Services\InvestorManagement\Stack\InvestedVehicle\CreateInvestedVehicleService;
use Illuminate\Database\Eloquent\Model;

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
    public Model $investor;

    /**
     * Define public property $current_amount
     */
    public $current_amount;

    /**
     * Define public method mount()
     */
    public function mount(Investor $investor)
    {
        $this->investor = $investor;
        $this->current_amount = CreateInvestedVehicleService::current_balance_check($investor->amount, $this->investor->id);
        $this->vehicles = Vehicle::query()->latest()->get();
    }

    /**
     * Define public method save() to store the resourse
     * @return void
     */
    public function save(): void
    {
        $this->validate(rules: $this->form->rules(), attributes: $this->form->attributes());
        $isCreate = CreateInvestedVehicleService::store($this->form, $this->investor);
        $response = $isCreate ? 'Data has been submited !' : 'Invalid Amount!!!';
        $this->dispatch($isCreate ? 'success' : 'error', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Invested Vehicle Create')]
    public function render()
    {
        return view('livewire.investor-management.stack.invested-vehicle.create-invested-vehicle-component');
    }
}

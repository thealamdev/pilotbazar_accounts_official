<?php

namespace App\Livewire\InvestorManagement\Stack\Investor;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\InvestorManagement\Investor;
use App\Services\VehicleManagement\Stack\Vehicle\CreateVehicleService;
use App\Livewire\Forms\InvestorManagement\Investor\CreateInvestorRequest;
use App\Services\InvestorManagement\Stack\Investor\CreateInvestorService;

class CreateInvestorComponent extends Component
{
    /**
     * Define public object $form
     */
    public CreateInvestorRequest $form;

    /**
     * name properties $name
     */
    public $name = '';

    /**
     * name properties $mobile
     */
    public $mobile = '';

    /**
     * name properties $email
     */
    public $email = '';

    /**
     * name properties $amount
     */
    public $amount;

    #[Title('Investor Create')]
    public function save()
    {
        $this->validate(rules: $this->form->rules(), attributes: $this->form->attributes());
        $isCreate = CreateInvestorService::store($this->form);
        $response = $isCreate ? 'Data has been submited !' : 'Something went wrong!';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
        // return redirect()->route('admin.version1.vehicle-management.vehicle.buy-payment.create', ['vehicle' => $isCreate->getKey()]);
    }

    public function render()
    {
        return view('livewire.investor-management.stack.investor.create-investor-component');
    }
}

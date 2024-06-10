<?php

namespace App\Livewire\VehicleManagement\Stack\Dependency\Payment\Method;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\VehicleManagement\Dependency\Payment\Method\CreatePaymentMethodRequest;
use App\Services\VehicleManagement\Stack\Dependency\Payment\Method\CreatePaymentMethodService;

class CreateMethodComponent extends Component
{
    /**
     * Define form object
     * @var object
     */
    public CreatePaymentMethodRequest $form;

    /**
     * Define public method save
     * @return array
     */
    public function save()
    {
        $this->validate();
        $isCreate = CreatePaymentMethodService::store($this->form);
        $response = $isCreate ? 'Data has been submited' : 'Something went wring';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Payment Method Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.dependency.payment.method.create-method-component');
    }
}

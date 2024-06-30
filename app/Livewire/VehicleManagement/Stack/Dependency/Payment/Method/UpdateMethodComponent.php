<?php

namespace App\Livewire\VehicleManagement\Stack\Dependency\Payment\Method;

use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;
use Livewire\Attributes\Title;
use Livewire\Component;

class UpdateMethodComponent extends Component
{
    /**
     * Define public property $response
     * @var array|object
     */
    public $response;

    /**
     * Define public mothod mount
     * @return void
     */
    public function mount(PaymentMethod $method): void
    {
        $this->response = $method;
        // $this->form->ignore = $method->id;
        // $this->form->name = $method->name;
        // $this->form->status = $method->status;
    }
    #[Title('Update Payment Method')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.dependency.payment.method.update-method-component');
    }
}

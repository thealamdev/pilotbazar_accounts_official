<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleBuyPayment;

use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentBankRequest;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentCashDeposit;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentRequest;
use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Services\VehicleManagement\Stack\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentService;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreateVehicleBuyPaymentComponent extends Component
{
    /**
     * Define public object $form;
     * @var array|object
     */
    public CreateVehicleBuyPaymentRequest $form;

    /**
     * Define public Form object $formCashDeposit
     * @var object
     */
    public CreateVehicleBuyPaymentBankRequest $formCashDeposit;

    /**
     * Define public property $selectedMethod
     * @var string
     */
    public ?string $selectedMethod = '';

    /**
     * Define the formType
     * @var string
     */
    public $formType = [];

    /**
     * Define public property $currentFormType
     * @var string
     */
    public ?string $currentFormType =  '';

    /**
     * Define public property $vehicle
     * @var array|object
     */
    public ?object $vehicle;

    /**
     * Define public property $methods
     * @var array|object
     */
    public ?object $methods;

    /**
     * Define the public updatedSelectedMethod for get the seleted method.
     */
    public function updatedSelectedMethod()
    {
        $this->formType = PaymentMethod::query()->where('id', $this->selectedMethod)->first();
        $this->currentFormType = $this->formType['name'];
    }

    /**
     * Define public method saveBank()
     * @return void
     */
    public function saveBank(): void
    {
        $this->form->validate();
        $isCreate = CreateVehicleBuyPaymentService::store($this->form, $this->vehicle, $this->formType);
        $response = $isCreate ? 'Data has been submitted !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    /**
     * Define public method saveCashDeposit() for submit CashDeposit
     * @return void
     */
    public function saveCashDeposit()
    {
        $this->formCashDeposit->validate();
        $isCreate = CreateVehicleBuyPaymentService::store($this->form, $this->vehicle, $this->formType);
        $response = $isCreate ? 'Data has been submitted !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    /**
     * Define the mount method
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
        $this->methods = PaymentMethod::query()->latest()->get();
    }

    #[Title('Vehicle Buy Payment')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-buy-payment.create-vehicle-buy-payment-component', ['vehicle' => $this->vehicle, 'methods' => $this->methods, 'currentFormType' => $this->currentFormType]);
    }
}

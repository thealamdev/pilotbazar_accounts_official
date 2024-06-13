<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleBuyPayment;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Models\VehicleManagement\Dependency\Bank\PblBank;
use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentRequest;
use App\Services\VehicleManagement\Stack\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentService;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentBankRequest;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleBuyPayment\CreateVehicleBuyPaymentRTGSRequest;

class CreateVehicleBuyPaymentComponent extends Component
{
    /**
     * Define public object $createVehicleBuyPaymentRTGSRequest
     */
    public CreateVehicleBuyPaymentRTGSRequest $createVehicleBuyPaymentRTGSRequest;

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
     * Define the paymentMethodType
     * @var array
     */
    public $paymentMethodType = [];

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
     * Define public property $banks
     * @return object
     */
    public ?object $banks;

    /**
     * Define the public updatedSelectedMethod for get the seleted method.
     */
    public function updatedSelectedMethod()
    {
        $this->paymentMethodType = PaymentMethod::query()->where('id', $this->selectedMethod)->first();
        $this->currentFormType = $this->paymentMethodType['name'];
    }

    /**
     * Define public method saveBank()
     * @return void
     */
    public function saveBank(): void
    {
        $this->form->validate();
        $isCreate = CreateVehicleBuyPaymentService::store($this->form, $this->vehicle, $this->paymentMethodType);
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
        $isCreate = CreateVehicleBuyPaymentService::store($this->formCashDeposit, $this->vehicle, $this->paymentMethodType);
        $response = $isCreate ? 'Data has been submitted !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->formCashDeposit->reset();
    }

    /**
     * Define public method saveRTGS() for submit RTGS
     * @return void
     */
    public function saveRTGS()
    {
        $this->createVehicleBuyPaymentRTGSRequest->validate();
    }

    /**
     * Define public method skip() for skip the process
     */
    public function skip()
    {
        return redirect()->route('admin.version1.vehicle-management.vehicle.costing.create', ['vehicle' => $this->vehicle->id]);
    }

    /**
     * Define the mount method
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
        $this->methods = PaymentMethod::query()->latest()->get();
        $this->banks = PblBank::query()->latest()->get();
    }

    #[Title('Vehicle Buy Payment')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.vehicle-buy-payment.create-vehicle-buy-payment-component');
    }
}

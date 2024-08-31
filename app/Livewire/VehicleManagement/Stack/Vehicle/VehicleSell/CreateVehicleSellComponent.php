<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleSell;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Models\VehicleManagement\SellService\SellServiceCategory;
use App\Livewire\Forms\VehicleManagement\SellService\CreateVehicleSellServiceRequest;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleSell\CreateVehicleSellRequest;
use App\Models\VehicleManagement\SellService\VehicleSellService;
use App\Services\VehicleManagement\Stack\Vehicle\VehicleSell\CreateVehicleSellService;

class CreateVehicleSellComponent extends Component
{
    /**
     * Define public property $client_name
     * @var string
     */
    public ?string $client_name = '';

    /**
     * Define public property $mobile
     * @var string
     */
    public ?string $mobile = '';

    /**
     * Define publilc property $nid
     * @var ?string
     */
    public ?string $nid = '';

    /**
     * Define public property $address
     * @var ?string
     */
    public ?string $address = '';

    /**
     * Define public property $sell_price
     * @var ?string
     */
    public $sell_price;

    /**
     * Define public property $sell_date
     */
    public $sell_date;

    /**
     * Define public property $vehicle
     * @var array|object
     */
    public $vehicle;

    /**
     * Define public property $sell_service_categories
     * @var array|object
     */
    public $sell_service_categories;

    /**
     * Define public property $sell_services
     * @var array|object
     */
    public $sell_services;

    /**
     * Define public form object $form
     */
    public CreateVehicleSellRequest $form;

    /**
     * Define public form object CreateVehicleSellServiceRequest $createVehicleSellServiceRequest
     */
    public CreateVehicleSellServiceRequest $createVehicleSellServiceRequest;

    /**
     * Define public method mount()
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
        /**
         * Set old value into the form 
         */
        $this->form->vehicle_id = $this->vehicle->id;
        $this->form->name = $this->vehicle->seller?->name;
        $this->form->mobile = $this->vehicle->seller?->mobile;
        $this->form->nid = $this->vehicle->seller?->nid;
        $this->form->sell_date = $this->vehicle->seller?->sell_date;
        $this->form->sell_price = $this->vehicle->seller?->sell_price;
        $this->form->address = $this->vehicle->seller?->address;
        $this->form->status = $this->vehicle->seller?->status;

        /**
         * Set value to createVehicleSellServiceRequest form.
         */
        $this->createVehicleSellServiceRequest->vehicle_id = $this->vehicle->id;

        /**
         * Sell service category datas
         */
        $this->sell_service_categories = SellServiceCategory::query()->get();
        $this->sell_services = VehicleSellService::query()->with('sell_service')->get();

        $this->vehicle = Vehicle::query()
            ->with('seller')
            ->where('id', $vehicle->id)
            ->with('user', 'color', 'models', 'model_year')
            ->with('sellPayments', fn($query) => $query->with('paymentMethod'))
            ->first();
    }

    /**
     * Define public method save() to save the resourses
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
        $isCreate = CreateVehicleSellService::store($this->form);
        $response = $isCreate ? 'Data has been submited !' : 'Something went wrong!';
        $this->dispatch('success', ['message' => $response]);
    }

    /**
     * Define public method sellServiceSave()
     */
    public function sellServiceSave()
    {
        $this->createVehicleSellServiceRequest->validate();
        $response = VehicleSellService::create([
            'vehicle_id' => $this->vehicle->id,
            'sell_service_category_id' => $this->createVehicleSellServiceRequest->name,
            'amount'     => $this->createVehicleSellServiceRequest->amount
        ]);
        $this->sell_services = VehicleSellService::query()->with('sell_service')->get();

        $this->dispatch('success', ['message' => 'Data insert successfully']);
    }

    #[Title('Vehicle Sell')]
    public function render()
    {
        /**
         * Set value to the money receipt
         */
        $this->client_name = $this->form->name;
        $this->mobile = $this->form->mobile;
        $this->nid = $this->form->nid;
        $this->sell_price = $this->form->sell_price;
        $this->sell_date = $this->form->sell_date;
        $this->address = $this->form->address;

        return view(
            'livewire.vehicle-management.stack.vehicle.vehicle-sell.create-vehicle-sell-component',
            [
                'client_name' => $this->client_name,
                'mobile' => $this->mobile,
                'nid' => $this->nid,
                'address' => $this->address,
            ]
        );
    }
}

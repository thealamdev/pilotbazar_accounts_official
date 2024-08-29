<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleSell;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleSell\CreateVehicleSellRequest;
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
     * Define public property $costing_details
     * @var string
     */
    public $vehicle_id;

    /**
     * Define public form object $form
     */
    public CreateVehicleSellRequest $form;

    /**
     * Define public method mount()
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
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
        $this->form->reset();
    }

    #[Title('Vehicle Sell')]
    public function render()
    {
        $this->form->vehicle_id = $this->vehicle->id;
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

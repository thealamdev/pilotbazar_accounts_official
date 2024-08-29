<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleSell;

use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleSell\CreateVehicleSellRequest;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateVehicleSellComponent extends Component
{
    /**
     * Define public property $client_name
     * @var string
     */
    public ?string $client_name = '';

    /**
     * Define public form object $form
     */
    public CreateVehicleSellRequest $form;

    /**
     * Define public method save() to save the resourses
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
    }

    #[Title('Vehicle Sell')]
    public function render()
    {
        $this->client_name = $this->form->name;
        return view('livewire.vehicle-management.stack.vehicle.vehicle-sell.create-vehicle-sell-component', ['client_name' => $this->client_name]);
    }
}

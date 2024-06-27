<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle;

use App\Livewire\Forms\VehicleManagement\Vehicle\CreateVehicleRequest;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\Color;
use App\Models\VehicleManagement\Modules\Models;
use App\Models\VehicleManagement\Modules\ModelYear;
use App\Services\VehicleManagement\Stack\Vehicle\CreateVehicleService;

class CreateVehicleComponent extends Component
{
    /**
     * Define form object
     * @var object
     */
    public CreateVehicleRequest $form;

    /**
     * Define models property
     * @var array
     */
    public $models = [];

    /**
     * Define modelYears property
     * @var array
     */
    public $modelYears = [];

    /**
     * Define colors property
     * @var array
     */
    public $colors = [];

    /**
     * Define the mount 
     * @return void
     */
    public function mount(): void
    {
        $this->models = Models::query()->latest()->where('status', 1)->get();
        $this->modelYears = ModelYear::query()->latest()->where('status', 1)->get();
        $this->colors = Color::query()->latest()->where('status', 1)->get();
    }

    /**
     * Define save function for store data
     * @return array|object
     */
    public function save(): array|object
    {
        $this->validate(rules: $this->form->rules(), attributes: $this->form->attributes());
        $isCreate = CreateVehicleService::store($this->form);
        $response = $isCreate ? 'Data has been submited !' : 'Something went wrong!';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
        return redirect()->route('admin.version1.vehicle-management.vehicle.buy-payment.create', ['vehicle' => $isCreate->getKey()]);
    }

    #[Title('Vehicle Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.create-vehicle-component');
    }
}

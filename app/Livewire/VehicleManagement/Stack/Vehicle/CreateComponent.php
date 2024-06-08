<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle;

use App\Livewire\Forms\VehicleManagement\Vehicle\CreateVehicleRequest;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\Color;
use App\Models\VehicleManagement\Modules\Models;
use App\Models\VehicleManagement\Modules\ModelYear;

class CreateComponent extends Component
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
     * @return void
     */
    public function save()
    {
        $this->validate($this->form->rules(), attributes: $this->form->attributes());
    }

    #[Title('Vehicle Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.vehicle.create-component');
    }
}

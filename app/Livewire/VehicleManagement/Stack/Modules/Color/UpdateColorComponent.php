<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Color;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\Color;
use App\Livewire\Forms\VehicleManagement\Modules\Color\UpdateColorRequest;
use App\Services\VehicleManagement\Stack\Modules\Color\UpdateColorService;

class UpdateColorComponent extends Component
{
    /**
     * UpdateColorRequest $form
     * @var object
     */
    public UpdateColorRequest $form;

    /**
     * public property color
     * @var array|object
     */
    public $response;

    /**
     * Mount the Color $color model binding
     * @return void
     */
    public function mount(Color $color): void
    {
        $this->response = $color;
        $this->form->ignore = $color->id;
        $this->form->name = $color->name;
        $this->form->status = $color->status;
    }

    /**
     * update method for update color
     * @return void
     */
    public function update()
    {
        $this->validate($this->form->rules(), attributes: $this->form->attributes());
        $isCreate = UpdateColorService::adapt($this->form, $this->response);
        $response = $isCreate ? 'Data has been update !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        return redirect()->to('admin/version1/vehicle-management/vehicles/modules/colors');
    }

    #[Title('Color Update')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.color.update-color-component', ['response' => $this->response]);
    }
}

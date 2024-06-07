<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Color;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\Color;
use App\Livewire\Forms\VehicleManagement\Modules\Color\UpdatePost;
use App\Services\VehicleManagement\Stack\Modules\Color\UpdateColorService;

class UpdateComponent extends Component
{
    /**
     * UpdateForm $updateForm
     */
    public UpdatePost $form;

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
        $this->form->name = $color->name;
        $this->form->status = $color->status;
    }

    /**
     * update method for update color
     * @return void
     */
    public function update()
    {
        $this->form->validate();
        $isCreate = UpdateColorService::adapt($this->form, $this->response);
        $response = $isCreate ? 'Data has been update !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        return redirect()->to('admin/version1/vehicle-management/vehicles/modules/colors');
    }

    #[Title('Color Update')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.color.update-component', ['response' => $this->response]);
    }
}

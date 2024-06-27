<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Models;

use App\Livewire\Forms\VehicleManagement\Modules\Models\UpdateModelRequest;
use App\Models\VehicleManagement\Modules\Models;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\VehicleManagement\Stack\Modules\Models\UpdateModelService;

class UpdateModelComponent extends Component
{
    /**
     * Define form object $form
     */
    public UpdateModelRequest $form;

    /**
     * Define public property $response
     * @var object
     */
    public ?object  $response;

    /**
     * Define public mothod mount
     * @return void
     */
    public function mount(Models $model): void
    {
        $this->response = $model;
        $this->form->ignore = $model->id;
        $this->form->name = $model->name;
        $this->form->status = $model->status;
    }

    /**
     * update method for update color
     * @return void
     */
    public function update()
    {
        $this->validate($this->form->rules(), attributes: $this->form->attributes());
        $isCreate = UpdateModelService::adapt($this->form, $this->response);
        $response = $isCreate ? 'Data has been update !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        return redirect()->to('admin/version1/vehicle-management/vehicles/modules/models');
    }

    #[Title('Update Model')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.models.update-model-component');
    }
}

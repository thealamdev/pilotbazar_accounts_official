<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\ModelYear;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Modules\ModelYear;
use App\Livewire\Forms\VehicleManagement\Modules\ModelYear\UpdateModelYearRequest;
use App\Services\VehicleManagement\Stack\Modules\ModelYear\UpdateModelYearService;

class UpdateModelYearComponent extends Component
{
    /**
     * Define form object $form of UpdateModelYearRequest
     * @var object
     */
    public UpdateModelYearRequest $form;

    /**
     * Define publi poroperty $response
     * @var object
     */
    public $response;

    /**
     * Define public mothod mount
     * @return void
     */
    public function mount(ModelYear $model_year): void
    {
        $this->response = $model_year;
        $this->form->ignore = $model_year->id;
        $this->form->name = $model_year->name;
        $this->form->status = $model_year->status;
    }

    /**
     * update method for update color
     * @return void
     */
    public function update()
    {
        $this->validate($this->form->rules(), attributes: $this->form->attributes());
        $isCreate = UpdateModelYearService::adapt($this->form, $this->response);
        $response = $isCreate ? 'Data has been update !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        return redirect()->to('admin/version1/vehicle-management/vehicles/modules/model-year');
    }

    #[Title('Update Model Year')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.model-year.update-model-year-component');
    }
}

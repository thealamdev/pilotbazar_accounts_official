<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\ModelYear;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\VehicleManagement\Modules\ModelYear\CreatModelYearRequest;
use App\Services\VehicleManagement\Stack\Modules\ModelYear\CreateModelYearService;

class CreateModelYearComponent extends Component
{
    /**
     * Create form object
     * @var object
     */
    public CreatModelYearRequest $form;

    /**
     * method for save data
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
        $isCreate = CreateModelYearService::store($this->form);
        $response = $isCreate ? 'Data has been submited' : 'Something went wrong';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Model Year Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.model-year.create-component');
    }
}

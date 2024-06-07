<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\ModelYear;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\VehicleManagement\Modules\ModelYear\CreatPost;
use App\Services\VehicleManagement\Stack\Modules\ModelYear\CreateModelYear;

class CreateComponent extends Component
{
    /**
     * Create form object
     * @var object
     */
    public CreatPost $form;

    /**
     * method for save data
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
        $isCreate = CreateModelYear::store($this->form);
        $response = $isCreate ? 'Data has been submited' : 'Something went wrong';
        session()->flash('status', $response);
        $this->form->reset();
    }

    #[Title('Model Year Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.model-year.create-component');
    }
}

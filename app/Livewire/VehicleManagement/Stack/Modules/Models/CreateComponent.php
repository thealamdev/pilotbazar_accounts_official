<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Models;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\VehicleManagement\Modules\Models\CreatPost;
use App\Services\VehicleManagement\Stack\Modules\Models\CreateModelService;
 

class CreateComponent extends Component
{
    /**
     * Create form object
     * @var array|object
     */
    public CreatPost $form;

    /**
     * method for save data
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
        $isCreate = CreateModelService::store($this->form);
        $response = $isCreate ? 'Data has been created !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Model Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.models.create-component');
    }
}

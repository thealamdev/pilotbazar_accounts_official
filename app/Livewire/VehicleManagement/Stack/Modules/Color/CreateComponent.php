<?php

namespace App\Livewire\VehicleManagement\Stack\Modules\Color;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\VehicleManagement\Modules\Color\CreatePost;
use App\Services\VehicleManagement\Stack\Modules\Color\CreateColorService;

class CreateComponent extends Component
{
    /**
     * Create form object
     * @return object
     */
    public CreatePost $form;

    /**
     * method for save data
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
        $isCreate = CreateColorService::store($this->form);
        $response = $isCreate ? 'Data Insert Successfull' : 'Sorry ! Some problem happend';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Color Create')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.modules.color.create-component');
    }
}

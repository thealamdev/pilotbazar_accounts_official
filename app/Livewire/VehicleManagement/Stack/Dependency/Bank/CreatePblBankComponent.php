<?php

namespace App\Livewire\VehicleManagement\Stack\Dependency\Bank;

use App\Livewire\Forms\VehicleManagement\Dependency\Bank\CreatePblBankRequest;
use App\Services\VehicleManagement\Stack\Dependency\Bank\CreatePblBankService;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreatePblBankComponent extends Component
{
    /**
     * Define form object $form
     */
    public CreatePblBankRequest $form;

    /**
     * Define public method save to store records
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
        $isCreate = CreatePblBankService::store($this->form);
        $response = $isCreate ? 'Data has been submited !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        $this->form->reset();
    }

    #[Title('Create PBL Bank')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.dependency.bank.create-pbl-bank-component');
    }
}

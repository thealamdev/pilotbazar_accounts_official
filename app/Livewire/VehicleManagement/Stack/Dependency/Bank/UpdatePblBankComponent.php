<?php

namespace App\Livewire\VehicleManagement\Stack\Dependency\Bank;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Dependency\Bank\PblBank;
use App\Livewire\Forms\VehicleManagement\Dependency\Bank\UpdatePblBankRequest;

class UpdatePblBankComponent extends Component
{
    /**
     * Define form object
     */
    public UpdatePblBankRequest $form;

    /**
     * Define public property $response
     * @var array|object
     */
    public $response;

    /**
     * Define public mothod mount
     * @return void
     */
    public function mount(PblBank $pbl_bank): void
    {
        $this->response = $pbl_bank;
        $this->form->name = $pbl_bank->name;
        $this->form->account_number = $pbl_bank->account_number;
        $this->form->status = $pbl_bank->status;
    }

    /**
     * Define public method update to update PBL Bank
     * @return void
     */
    public function update()
    {
        $this->validate($this->form->rules(), attributes: $this->form->attributes());
    }

    #[Title('Pbl Bank Update')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.dependency.bank.update-pbl-bank-component');
    }
}

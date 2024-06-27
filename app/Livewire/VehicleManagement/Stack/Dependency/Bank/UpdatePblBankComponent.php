<?php

namespace App\Livewire\VehicleManagement\Stack\Dependency\Bank;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Dependency\Bank\PblBank;
use App\Livewire\Forms\VehicleManagement\Dependency\Bank\UpdatePblBankRequest;
use App\Services\VehicleManagement\Stack\Dependency\Bank\UpdatePblBankService;

class UpdatePblBankComponent extends Component
{
    /**
     * Define form object
     * @var object
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
     * @return array|object
     */
    public function update(): array|object
    {
        // $this->validate($this->form->rules(), attributes: $this->form->attributes());
        $isCreate = UpdatePblBankService::adapt($this->form, $this->response);
        $response = $isCreate ? 'Data has been update !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
        return redirect()->to('admin/version1/vehicle-management/vehicles/dependencies/banks/pbl_banks');
    }

    #[Title('Pbl Bank Update')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.dependency.bank.update-pbl-bank-component');
    }
}

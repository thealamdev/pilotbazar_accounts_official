<?php

namespace App\Livewire\InvestorManagement\Stack\Investor;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\InvestorManagement\Investor;
use App\Livewire\Forms\InvestorManagement\Investor\UpdateInvestorRequest;
use App\Services\InvestorManagement\Stack\Investor\UpdateInvestorService;

class UpdateInvestorComponent extends Component
{
    /**
     * Define public form object UpdateInvestorRequest $form
     */
    public UpdateInvestorRequest $form;

    /**
     * Define public property $response
     */
    public $response;

    /**
     * Define public method mount()
     * @param Investor $investor
     * @return void
     */
    public function mount(Investor $investor): void
    {
        $this->response = $investor;
        $this->form->name = $investor->name;
        $this->form->email = $investor->email;
        $this->form->mobile = $investor->mobile;
        $this->form->amount = $investor->amount;
        $this->form->address = $investor->address;
        $this->form->status = $investor->status;
    }

    /**
     * Define public method update() to update the resourses
     */
    public function update()
    {
        $this->validate($this->form->rules(), attributes: $this->form->attributes());
        $isCreate = UpdateInvestorService::adapt($this->form, $this->response);
        $response = $isCreate ? 'Data has been update !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
    }

    #[Title('Investor Update')]
    public function render()
    {
        return view('livewire.investor-management.stack.investor.update-investor-component');
    }
}

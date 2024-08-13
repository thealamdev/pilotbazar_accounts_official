<?php

namespace App\Livewire\InvestorManagement\Table\Investment;

use App\Models\InvestorManagement\InvestedVehicle;
use Livewire\Attributes\Title;
use Livewire\Component;

class TableInvestmentComponent extends Component
{
    /**
     * Define public property $responses
     */
    public $responses;

    /**
     * Define public method mount()
     * @return void
     */
    public function mount(): void
    {
        $this->responses = InvestedVehicle::query()
        ->with('investedVehicles','investors')
        ->latest()->get();
    }

    #[Title('Investments')]
    public function render()
    {
        return view('livewire.investor-management.table.investment.table-investment-component');
    }
}

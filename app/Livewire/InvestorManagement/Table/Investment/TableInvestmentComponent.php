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
     * Define public property $search
     */
    public $search = '';

    #[Title('Investments')]
    public function render()
    {
        $this->responses = InvestedVehicle::query()
            ->latest()
            ->where('invested_amount', 'like', "%{$this->search}%")
            ->with('investedVehicles', 'investors')
            ->get();
        return view('livewire.investor-management.table.investment.table-investment-component', ['responses' => $this->responses]);
    }
}

<?php

namespace App\Livewire\InvestorManagement\Table\Investment;

use Livewire\Attributes\Title;
use Livewire\Component;

class TableInvestmentComponent extends Component
{
    #[Title('Investments')]
    public function render()
    {
        return view('livewire.investor-management.table.investment.table-investment-component');
    }
}

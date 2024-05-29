<?php

namespace App\Livewire\Investor\Table\Investor;

use Livewire\Component;
use Livewire\Attributes\Title;

class InvestorComponent extends Component
{
    #[Title('Investors')]
    public function render()
    {
        return view('livewire.investor.table.investor.investor-component');
    }
}

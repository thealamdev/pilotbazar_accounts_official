<?php

namespace App\Livewire\Investor\Table\Investor;

use App\Models\Investor\Investor;
use Livewire\Component;
use Livewire\Attributes\Title;

class InvestorComponent extends Component
{
    /**
     * public $investors
     * @return array|object
     */
    public $investors;

    #[Title('Investors')]
    public function render()
    {
        $this->investors = Investor::query()->get();
        $investors = $this->investors;
        return view('livewire.investor.table.investor.investor-component', compact('investors'));
    }
}

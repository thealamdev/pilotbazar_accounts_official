<?php

namespace App\Livewire\InvestorManagement\Table\Investor;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\InvestorManagement\Investor;

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
        return view('livewire.investor.table.investor-management.investor-component', ['investors' => $this->investors]);
    }
}

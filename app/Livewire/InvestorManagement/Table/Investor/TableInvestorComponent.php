<?php

namespace App\Livewire\InvestorManagement\Table\Investor;

use App\Models\InvestorManagement\Investor;
use Livewire\Attributes\Title;
use Livewire\Component;

class TableInvestorComponent extends Component
{
    /**
     * Define public property $responses
     */
    public $responses;

    #[Title('Investors')]
    public function render()
    {
        $this->responses = Investor::query()->latest()->get();
        return view('livewire.investor-management.table.investor.table-investor-component',['responses' => $this->responses]);
    }
}

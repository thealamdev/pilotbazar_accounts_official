<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class InvestorComponent extends Component
{
    #[Title('Investors')]
    public function render()
    {
        return view('livewire.investor-component');
    }
}

<?php

namespace App\Livewire\Investor\Stack\Investor;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreateComponent extends Component
{
    #[Title('Investor Create')]
    public function render()
    {
        return view('livewire.investor.stack.investor.create-component');
    }
}

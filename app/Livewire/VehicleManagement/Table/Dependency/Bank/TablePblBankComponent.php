<?php

namespace App\Livewire\VehicleManagement\Table\Dependency\Bank;

use App\Models\VehicleManagement\Dependency\Bank\PblBank;
use Livewire\Attributes\Title;
use Livewire\Component;

class TablePblBankComponent extends Component
{
    /**
     * Define public property $search
     * @var string
     */
    public ?string $search = '';

    #[Title('Banks')]
    public function render()
    {
        $responses = PblBank::query()
            ->latest()
            ->where('status', 1)
            ->where('name', 'like', "%{$this->search}%")
            ->paginate(10);
        return view('livewire.vehicle-management.table.dependency.bank.table-pbl-bank-component', ['responses' => $responses]);
    }
}

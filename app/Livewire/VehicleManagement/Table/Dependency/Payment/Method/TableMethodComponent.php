<?php

namespace App\Livewire\VehicleManagement\Table\Dependency\Payment\Method;

use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;
use Livewire\Component;
use Livewire\Attributes\Title;

class TableMethodComponent extends Component
{
    /**
     * Define public property $search
     * @var string
     */
    public ?string $search = '';

    #[Title('Payment Methods')]
    public function render()
    {
        $responses = PaymentMethod::query()
            ->latest()
            ->where('status', 1)
            ->where('name', 'like', "%{$this->search}%")
            ->paginate(10);
        return view('livewire.vehicle-management.table.dependency.payment.method.table-method-component', ['responses' => $responses]);
    }
}

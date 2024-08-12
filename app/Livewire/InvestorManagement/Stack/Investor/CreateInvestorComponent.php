<?php

namespace App\Livewire\InvestorManagement\Stack\Investor;

use App\Models\Investor\Investor;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreateInvestorComponent extends Component
{
    /**
     * name properties $name
     */
    public $name = '';

    /**
     * name properties $mobile
     */
    public $mobile = '';

    /**
     * name properties $email
     */
    public $email = '';

    /**
     * name properties $amount
     */
    public $amount = '';

    /**
     * name properties $profit_percent
     */
    public $profit_percent = '';

    /**
     * vehicles property $vehicles
     */
    public $vehicles = [];

    #[Title('Investor Create')]
    public function save()
    {
        Investor::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'amount' => $this->amount,
            'profit_percent' => $this->profit_percent,
        ]);

        return back()->with('success', 'Investor has been added');
    }

    public function render()
    {
        $this->vehicles = Vehicle::query()->latest()->get();
        return view('livewire.investor-management.stack.investor.create-investor-component', ['vehicles' => $this->vehicles]);
    }
}
<?php

namespace App\Livewire\Forms\InvestorManagement\InvestedVehicle;

use Livewire\Form;
use Illuminate\Validation\Rule;
use App\Models\VehicleManagement\Vehicle\Vehicle;

class CreateInvestedVehicleRequest extends Form
{
    /**
     * Define public properties
     * @var string
     */
    public $profit_percentage, $vehicle_id;

    /**
     * Define public method rules()
     * @return array
     */
    public function rules(): array
    {
        $rule['form.profit_percentage'] = ['required', 'decimal'];
        $rule['form.vehicle_id']        = ['required', Rule::exists(Vehicle::class, 'id')];

        return $rule;
    }

    /**
     * Define public method attributes()
     * @return array
     */
    public function attributes(): array
    {
        $rule['form.profit_percentage'] = 'Profit Percentage';
        $rule['form.vehicle_id']        = 'Vehicle';

        return $rule;
    }
}
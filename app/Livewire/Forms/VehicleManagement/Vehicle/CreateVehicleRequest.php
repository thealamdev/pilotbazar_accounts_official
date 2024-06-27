<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle;

use Livewire\Form;
use Illuminate\Validation\Rule;
use App\Models\VehicleManagement\Modules\Color;
use App\Models\VehicleManagement\Modules\Models;
use App\Models\VehicleManagement\Modules\ModelYear;

class CreateVehicleRequest extends Form
{
    /**
     * Define validation field property.
     * @var string
     */
    public $name, $model_id, $model_year_id, $color_id, $purchase_price, $status;

    /**
     * Define the rules method
     * @return array
     */
    public function rules(): array
    {
        $arr['form.name'] = ['required'];
        $arr['form.model_id'] = ['required', Rule::exists(Models::class, 'id')];
        $arr['form.model_year_id'] = ['required', Rule::exists(ModelYear::class, 'id')];
        $arr['form.color_id'] = ['required', Rule::exists(Color::class, 'id')];
        $arr['form.purchase_price'] = ['required', 'numeric'];
        $arr['form.status'] = ['required', 'in:0,1'];

        return $arr;
    }

    /**
     * Define the attributes method
     * @return array
     */
    public function attributes(): array
    {
        $arr['form.name'] = 'name';
        $arr['form.model_id'] = 'model';
        $arr['form.model_year_id'] = 'model year';
        $arr['form.color_id'] = 'color';
        $arr['form.purchase_price'] = 'purchse price';
        $arr['form.status'] = 'status';

        return $arr;
    }
}

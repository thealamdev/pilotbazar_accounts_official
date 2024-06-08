<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle;

use Livewire\Attributes\Validate;
use Livewire\Form;

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
        $arr['form.model_id'] = ['required'];
        $arr['form.model_year_id'] = ['required'];
        $arr['form.color_id'] = ['required'];
        $arr['form.purchase_price'] = ['required'];
        $arr['form.status'] = ['required'];

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

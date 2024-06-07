<?php

namespace App\Services\VehicleManagement\Stack\Modules\ModelYear;

use App\Models\VehicleManagement\Modules\ModelYear;

class CreateModelYear
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form) :array|object
    {
        $response = ModelYear::create([
            'user_id' => auth()->user()->id,
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

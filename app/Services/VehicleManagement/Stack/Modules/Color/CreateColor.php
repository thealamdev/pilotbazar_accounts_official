<?php

namespace App\Services\VehicleManagement\Stack\Modules\Color;

use App\Models\VehicleManagement\Modules\Color;

class CreateColor
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = Color::create([
            'user_id' => auth()->user()->id,
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

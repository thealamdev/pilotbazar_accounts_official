<?php

namespace App\Services\VehicleManagement\Stack\Vehicle;

use App\Models\VehicleManagement\Modules\Models;

class CreateVehicleService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = Models::create([
            'user_id' => auth()->user()->id,
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

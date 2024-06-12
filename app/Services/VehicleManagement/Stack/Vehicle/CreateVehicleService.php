<?php

namespace App\Services\VehicleManagement\Stack\Vehicle;

use App\Models\VehicleManagement\Vehicle\Vehicle;

class CreateVehicleService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $user_id = auth()->user()->id;

        $response = Vehicle::create([
            'user_id' => $user_id,
            'name' => $form?->name,
            'color_id' => $form?->color_id,
            'model_id' => $form?->model_id,
            'model_year_id' => $form?->model_year_id,
            'registration_number' => $form?->registration_number,
            'chassis_number' => $form?->chassis_number,
            'engine_number' => $form?->engine_number,
            'purchase_date' => $form?->purchase_date,
            'purchase_price' => $form?->purchase_price,
            'status' => $form?->status,
            'created_by' => $user_id,
        ]);
        return $response;
    }
}

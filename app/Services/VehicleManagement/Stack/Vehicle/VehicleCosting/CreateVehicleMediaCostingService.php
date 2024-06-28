<?php

namespace App\Services\VehicleManagement\Stack\Vehicle\VehicleCosting;

use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCosting;

class CreateVehicleMediaCostingService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form, $vehicle): array
    {
        $result = [];

        foreach ($form->costing_name as $key => $c_name) {
            $result[] = [
                'vehicle_id' => $vehicle->id,
                'costing_name' => $c_name,
                'amount' => $form->amount[$key],
                'date' => $form->date[$key],
                'remarks' => $form->remarks[$key],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        VehicleMediaCosting::insert($result);
        return $result;
    }
}

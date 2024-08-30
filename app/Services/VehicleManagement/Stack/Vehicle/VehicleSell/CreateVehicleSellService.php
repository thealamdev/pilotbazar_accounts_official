<?php

namespace App\Services\VehicleManagement\Stack\Vehicle\VehicleSell;

use App\Models\VehicleManagement\Vehicle\VehicleSell\VehicleSell;


class CreateVehicleSellService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = VehicleSell::updateOrCreate(
            ['vehicle_id' => $form->vehicle_id],
            [
                'name' => $form->name,
                'mobile' => $form->mobile,
                'nid' => $form->nid,
                'sell_date' => $form->sell_date,
                'sell_price' => $form->sell_price,
                'address' => $form->address,
                'status' => $form->status,
            ]
        );
        return $response;
    }
}

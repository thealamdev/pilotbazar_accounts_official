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
        $response = VehicleSell::create($form->all());
        return $response;
    }
}

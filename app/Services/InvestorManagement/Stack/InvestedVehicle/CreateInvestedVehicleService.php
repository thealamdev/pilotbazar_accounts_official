<?php

namespace App\Services\InvestorManagement\Stack\InvestedVehicle;

use App\Models\InvestorManagement\InvestedVehicle;

class CreateInvestedVehicleService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form, $investor): array|object
    {
        $response = InvestedVehicle::create([
            'invested_amount' => $form->invested_amount,
            'investor_id' => $investor,
            'vehicle_id' => $form->vehicle_id,
        ]);

        return $response;
    }
}

<?php

namespace App\Services\InvestorManagement\Stack\InvestedVehicle;

use App\Models\InvestorManagement\InvestedVehicle;

class UpdateInvestedVehicleService
{
    /**
     * Create static adapt method
     * @return bool
     */
    public static function adapt($form, $investor): bool
    {
        $response = InvestedVehicle::create([
            'invested_amount' => $form->invested_amount,
            'profit_percentage' => $form->profit_percentage,
            'investor_id' => $investor,
            'vehicle_id' => $form->vehicle_id,
        ]);

        return $response;
    }
}

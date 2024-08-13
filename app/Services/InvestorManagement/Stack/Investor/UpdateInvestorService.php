<?php

namespace App\Services\InvestorManagement\Stack\Investor;

use App\Models\InvestorManagement\Investor;
use App\Models\VehicleManagement\Vehicle\Vehicle;

class UpdateInvestorService
{
    /**
     * Create static adapt method
     * @return bool
     */
    public static function adapt($form, $investor): bool
    {
        $response = $investor->update([
            'name' => $form->name,
            'mobile' => $form->mobile,
            'email' => $form->email,
            'amount' => $form->amount,
            'address' => $form->address,
            'status' => $form->status,
        ]);

        return $response;
    }
}

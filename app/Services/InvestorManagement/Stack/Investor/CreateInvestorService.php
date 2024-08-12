<?php

namespace App\Services\InvestorManagement\Stack\Investor;

use App\Models\InvestorManagement\Investor;
use App\Models\VehicleManagement\Vehicle\Vehicle;

class CreateInvestorService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = Investor::create([
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

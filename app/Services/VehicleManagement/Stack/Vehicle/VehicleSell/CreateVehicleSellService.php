<?php

namespace App\Services\VehicleManagement\Stack\Vehicle\VehicleSell;

use App\Models\InvestorManagement\InvestedVehicle;
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

        if ($response) {

            $invested_vehicle = InvestedVehicle::where('vehicle_id', $response->vehicle_id)->get();
            foreach ($invested_vehicle as $each) {
                // dd($each->profit_percentage);
                dd($each->invested_amount * (0.01 * $each->profit_percentage));
            }
        }
        return $response;
    }
}

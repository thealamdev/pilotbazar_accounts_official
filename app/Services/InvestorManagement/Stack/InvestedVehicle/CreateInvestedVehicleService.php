<?php

namespace App\Services\InvestorManagement\Stack\InvestedVehicle;

use App\Enums\Status;
use App\Models\InvestedVehicleDetail;
use App\Models\InvestorBalance;
use App\Models\InvestorManagement\InvestedVehicle;
use App\Models\InvestorManagement\Investor;

class CreateInvestedVehicleService
{
    /**
     * Create static store method
     * @param $form
     * @param $investor
     * @return array|object
     */
    public static function store($form, $investor): array|object|bool
    {
        $investor_main_amount = Investor::query()->where('id', $investor)->sum('amount');
        $current_amount = self::current_balance_check($investor_main_amount, $investor);

        if ((int)$current_amount > 0) {
            $response = InvestedVehicle::create([
                'invested_amount' => $form->invested_amount,
                'profit_percentage' => $form->profit_percentage,
                'investor_id' => $investor,
                'vehicle_id' => $form->vehicle_id,
            ]);

            InvestedVehicleDetail::create([
                'vehicle_id' => $response->vehicle_id,
                'investor_id' => $response->investor_id,
                'invested_vehicle_id' => $response->getKey(),
                'invested_amount' => $response->invested_amount,
                'status' => Status::ACTIVE->toString(),
            ]);

            self::current_balance_check($investor_main_amount, $investor);
            InvestorBalance::updateOrCreate(['investor_id' => $response->investor_id], ['current_amount' => $current_amount, 'status' => Status::ACTIVE->toString()]);
            return $response;
        } else {
            return $response = false;
        }
    }

    /**
     * Define public static method current_balance_check()
     * @param $main_amount
     * @param $investor_id
     * @return integer
     */
    public static function current_balance_check($main_amount, $investor_id)
    {
        $invested_amount = InvestedVehicleDetail::query()
            ->where('investor_id', $investor_id)
            ->sum('invested_amount');
        return $main_amount - $invested_amount;
    }
}

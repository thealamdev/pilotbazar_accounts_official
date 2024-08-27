<?php

namespace App\Services\InvestorManagement\Stack\InvestedVehicle;

use App\Enums\Status;
use App\Models\InvestedVehicleDetail;
use App\Models\InvestorManagement\Investor;
use App\Models\InvestorManagement\InvestedVehicle;
use App\Models\InvestorManagement\InvestorBalance;
use Illuminate\Database\Eloquent\Model;

class CreateInvestedVehicleService
{
    /**
     * Create static store method
     * @param $form
     * @param $investor
     * @return array|object
     */
    public static function store($form, Model $investor): array|object|bool
    {
        $investor_main_amount = $investor->amount;
        $old_invested_amount = self::old_balance_check($investor->id);
        $new_invested_amount = $old_invested_amount + $form->invested_amount;

        if ((int)$new_invested_amount < $investor_main_amount) {
            $response = InvestedVehicle::create([
                'invested_amount' => $form->invested_amount,
                'profit_percentage' => $form->profit_percentage,
                'investor_id' => $investor->id,
                'vehicle_id' => $form->vehicle_id,
            ]);

            $current_amount = self::current_balance_check($investor_main_amount, $investor);
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
        $invested_amount = InvestedVehicle::query()
            ->where('investor_id', $investor_id)
            ->sum('invested_amount');
        return $main_amount - $invested_amount;
    }

    /**
     * Define public static method old_balance_check()
     * @param $investedVehicle
     * @param $investor_id
     * @return integer
     */
    public static function old_balance_check($investor_id)
    {
        $invested_amount = InvestedVehicle::query()
            ->where('investor_id', $investor_id)
            ->sum('invested_amount');
        return $invested_amount;
    }
}

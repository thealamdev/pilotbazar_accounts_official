<?php

namespace App\Services\VehicleManagement\Stack\Vehicle\VehicleSellPayment;

use App\Models\VehicleManagement\Vehicle\VehicleBuyPayment\VehicleBuyPayment;
use App\Models\VehicleManagement\Vehicle\VehicleSellPayment\VehicleSellPayment;

class CreateVehicleSellPaymentService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form, $vehicle, $method): array|object
    {
        if ($method->name === 'Cash Deposit') {
            $response = VehicleSellPayment::create([
                'vehicle_id' => $vehicle->id,
                'payment_method_id' => $method?->id,
                'debit_bank_name' => $form?->credit_bank_name,
                'debit_bank_account_number' => $form?->credit_bank_account_number,
                'account_holder_name' => $form?->account_holder_name,
                'amount' => $form?->amount,
                'remarks' => $form?->remarks,
                'date' => $form->date
            ]);
        } else {
            $response = VehicleSellPayment::create([
                'vehicle_id' => $vehicle->id,
                'payment_method_id' => $method?->id,
                'credit_bank' => $form?->credit_bank,
                'debit_bank_name' => $form?->debit_bank_name,
                'debit_bank_account_number' => $form?->debit_bank_account_number,
                'account_holder_name' => $form?->account_holder_name,
                'amount' => $form?->amount,
                'remarks' => $form?->remarks,
                'date' => $form->date
            ]);
        }

        return $response;
    }
}

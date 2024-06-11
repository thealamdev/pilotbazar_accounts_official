<?php

namespace App\Services\VehicleManagement\Stack\Vehicle\VehicleBuyPayment;

use App\Models\VehicleManagement\Vehicle\VehicleBuyPayment\VehicleBuyPayment;

class CreateVehicleBuyPaymentService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form, $vehicle, $method): array|object
    {
        if ($method->name === 'Bank') {
            $response = VehicleBuyPayment::create([
                'vehicle_id' => $vehicle->id,
                'payment_method_id' => $method?->id,
                'pbl_bank' => $form?->pbl_bank,
                'clients_bank' => $form?->clients_bank,
                'client_bank_account_number' => $form?->client_bank_account_number,
                'client_name' => $form?->client_name,
                'amount' => $form?->amount,
                'remarks' => $form?->remarks,
                'date' => $form->date
            ]);
        } elseif ($method->name === 'Cash Deposit') {
            $response = VehicleBuyPayment::create([
                'vehicle_id' => $vehicle->id,
                'payment_method_id' => $method?->id,
                'pbl_bank' => $form?->pbl_bank,
                'clients_bank' => $form?->clients_bank,
                'client_bank_account_number' => $form?->client_bank_account_number,
                'client_name' => $form?->client_name,
                'amount' => $form?->amount,
                'remarks' => $form?->remarks,
                'date' => $form->date
            ]);
        }

        return $response;
    }
}

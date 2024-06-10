<?php

namespace App\Services\VehicleManagement\Stack\Dependency\Payment\Method;

use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;

class CreatePaymentMethodService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = PaymentMethod::create([
            'user_id' => auth()->user()->id,
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

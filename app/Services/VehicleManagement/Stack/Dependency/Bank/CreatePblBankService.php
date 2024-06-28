<?php

namespace App\Services\VehicleManagement\Stack\Dependency\Bank;

use App\Models\VehicleManagement\Dependency\Bank\PblBank;

class CreatePblBankService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = PblBank::create([
            'name' => $form->name,
            'account_number' => $form->account_number,
        ]);
        return $response;
    }
}

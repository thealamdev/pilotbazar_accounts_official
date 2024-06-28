<?php

namespace App\Services\VehicleManagement\Stack\Dependency\Bank;

use App\Models\VehicleManagement\Dependency\Bank\PblBank;

class UpdatePblBankService
{
    /**
     * Create static store method
     * @return bool
     */
    public static function adapt($form, $pbl_bank): bool
    {
        $response = $pbl_bank->update([
            'name' => $form->name,
            'account_number' => $form->account_number,
            'status' => $form->status,
        ]);
        return $response;
    }
}

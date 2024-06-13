<?php

namespace App\Services\VehicleManagement\Stack\Modules\ModelYear;

use App\Models\VehicleManagement\Modules\Models;

class UpdateModelYearService
{
    /**
     * Create static adapt method
     * @return bool
     */
    public static function adapt($form, $model_year): bool
    {
        $response = $model_year->update([
            'user_id' => auth()->user()->id,
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

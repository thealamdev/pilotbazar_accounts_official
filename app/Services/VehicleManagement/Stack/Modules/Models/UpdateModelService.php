<?php

namespace App\Services\VehicleManagement\Stack\Modules\Models;

use App\Models\VehicleManagement\Modules\Models;

class UpdateModelService
{
    /**
     * Create static adapt method
     * @return bool
     */
    public static function adapt($form, $model): bool
    {
        $response = $model->update([
            'user_id' => auth()->user()->id,
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

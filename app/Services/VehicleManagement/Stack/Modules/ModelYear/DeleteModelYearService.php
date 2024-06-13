<?php

namespace App\Services\VehicleManagement\Stack\Modules\ModelYear;

use App\Models\VehicleManagement\Modules\ModelYear;

class DeleteModelYearService
{
    /**
     * Create static erase method
     * @return bool
     */
    public static function erase(string $id): bool
    {
        $instance = ModelYear::where('id', $id)->first();
        $response = $instance->delete();
        return $response;
    }
}

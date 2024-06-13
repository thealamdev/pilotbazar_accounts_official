<?php

namespace App\Services\VehicleManagement\Stack\Modules\Models;

use App\Models\VehicleManagement\Modules\Models;

class DeleteModelService
{
    /**
     * Create static erase method
     * @return bool
     */
    public static function erase(string $id): bool
    {
        $instance = Models::where('id', $id)->first();
        $response = $instance->delete();
        return $response;
    }
}

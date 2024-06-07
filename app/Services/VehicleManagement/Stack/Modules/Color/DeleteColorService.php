<?php

namespace App\Services\VehicleManagement\Stack\Modules\Color;

use App\Models\VehicleManagement\Modules\Color;

class DeleteColorService
{
    /**
     * Create static erase method
     * @return bool
     */
    public static function erase(string $id): bool
    {
        $instance = Color::where('id', $id)->first();
        $response = $instance->delete();
        return $response;
    }
}

<?php

namespace App\Services\VehicleManagement\Stack\Modules\Models;

use App\Models\VehicleManagement\Modules\Models;

class CreateModelService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = Models::create([
            'user_id' => auth()->user()->id,
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

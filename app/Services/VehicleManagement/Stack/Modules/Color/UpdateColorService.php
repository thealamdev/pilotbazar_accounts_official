<?php

namespace App\Services\VehicleManagement\Stack\Modules\Color;

use App\Livewire\Forms\VehicleManagement\Modules\Color\UpdatePost;
use App\Models\VehicleManagement\Modules\Color;

class UpdateColorService
{
    /**
     * Create static store method
     * @return bool
     */
    public static function adapt($form, $color): bool
    {
        $response = $color->update([
            'user_id' => auth()->user()->id,
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

<?php

namespace App\Services\VehicleManagement\Stack\SellService\Category;

use App\Models\VehicleManagement\SellService\SellServiceCategory;

class CreateSellServiceCategoryService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $response = SellServiceCategory::create([
            'name' => $form->name,
            'status' => $form->status
        ]);
        return $response;
    }
}

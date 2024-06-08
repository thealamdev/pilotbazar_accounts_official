<?php

namespace App\Services\VehicleManagement\Stack\Vehicle;

use App\Models\VehicleManagement\Vehicle\Vehicle;

class CreateVehicleService
{
    /**
     * Create static store method
     * @return array|object
     */
    public static function store($form): array|object
    {
        $user_id = auth()->user()->id;
        $total_cost = $form?->purchase_price + $form?->media_cost_purchase + $form?->media_selling_cost + $form?->checkup_cost_purchase + $form?->estimate_cost + $form?->touchup_cost + $form?->engine_service_cost + $form?->fuel_cost + $form?->bikroy_ad_cost + $form?->facebook_ad_cost + $form?->paper_update_cost + $form?->seat_cover_cost + $form?->electric_cost;

        $response = Vehicle::create([
            'user_id' => $user_id,
            'name' => $form?->name,
            'color_id' => $form?->color_id,
            'model_id' => $form?->model_id,
            'model_year_id' => $form?->model_year_id,
            'registratrion_number' => $form?->registratrion_number,
            'chassis_number' => $form?->chassis_number,
            'engine_number' => $form?->engine_number,
            'purchase_date' => $form?->purchase_date,
            'purchase_price' => $form?->purchase_price,
            'media_cost_purchase' => $form?->media_cost_purchase,
            'media_selling_cost' => $form?->media_selling_cost,
            'checkup_cost_purchase' => $form?->checkup_cost_purchase,
            'estimate_cost' => $form?->estimate_cost,
            'touchup_cost' => $form?->touchup_cost,
            'engine_service_cost' => $form?->engine_service_cost,
            'fuel_cost' => $form?->fuel_cost,
            'bikroy_ad_cost' => $form?->bikroy_ad_cost,
            'facebook_ad_cost' => $form?->facebook_ad_cost,
            'paper_update_cost' => $form?->paper_update_cost,
            'seat_cover_cost' => $form?->seat_cover_cost,
            'electric_cost' => $form?->electric_cost,
            'total_cost' => $total_cost,
            'status' => $form?->status,
            'created_by' => $user_id,
        ]);
        return $response;
    }
}

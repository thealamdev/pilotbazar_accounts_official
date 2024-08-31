<?php

namespace App\Models\VehicleManagement\SellService;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleSellService extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     */
    protected $guarded = ['id'];

    /**
     * Define public method sell_service
     */
    public function sell_service()
    {
        return $this->belongsTo(SellServiceCategory::class, 'sell_service_category_id', 'id');
    }
}

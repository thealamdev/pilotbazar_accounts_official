<?php

namespace App\Models\VehicleManagement\Vehicle\VehicleCosting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleServiceCosting extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Dedine protected property $table
     * @var string
     */
    protected $table = 'vehicle_service_costings';
}

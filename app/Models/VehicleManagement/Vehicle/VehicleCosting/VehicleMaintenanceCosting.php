<?php

namespace App\Models\VehicleManagement\Vehicle\VehicleCosting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleMaintenanceCosting extends Model
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
    protected $table = 'vehicle_maintenance_costings';
}

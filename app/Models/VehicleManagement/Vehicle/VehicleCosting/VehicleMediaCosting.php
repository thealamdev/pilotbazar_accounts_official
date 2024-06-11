<?php

namespace App\Models\VehicleManagement\Vehicle\VehicleCosting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleMediaCosting extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     * @var array
     */
    protected $guarded = ['id'];
}

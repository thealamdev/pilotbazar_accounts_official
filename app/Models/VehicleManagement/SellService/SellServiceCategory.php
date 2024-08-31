<?php

namespace App\Models\VehicleManagement\SellService;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SellServiceCategory extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     */
    protected $guarded = ['id'];
}

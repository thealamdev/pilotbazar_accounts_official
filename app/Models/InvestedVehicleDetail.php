<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvestedVehicleDetail extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     */
    protected $guarded = ['id'];
}

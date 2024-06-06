<?php

namespace App\Models\VehicleManagement\Modules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelYear extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var <array>
     * protected guarded $guarded
     */
    protected $guarded = ['id'];
}

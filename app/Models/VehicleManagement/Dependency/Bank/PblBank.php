<?php

namespace App\Models\VehicleManagement\Dependency\Bank;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PblBank extends Model
{
    use HasFactory;

    /**
     * Define protected property $guarded
     */
    protected $guarded = ['id'];

    /**
     * Define protected property $table
     */
    protected $table = 'pbl_banks';
}

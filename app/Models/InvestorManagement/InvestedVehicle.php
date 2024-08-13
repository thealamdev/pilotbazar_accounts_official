<?php

namespace App\Models\InvestorManagement;

use App\Models\VehicleManagement\Vehicle\Vehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestedVehicle extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     */
    protected $guarded = ['id'];

    /**
     * Define public method investedOn()
     */
    public function investedVehicles()
    {
        return $this->hasMany(Vehicle::class, 'id', 'vehicle_id');
    }
}

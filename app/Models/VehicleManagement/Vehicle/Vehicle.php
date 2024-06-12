<?php

namespace App\Models\VehicleManagement\Vehicle;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\VehicleManagement\Modules\Color;
use App\Models\VehicleManagement\Modules\Models;
use App\Models\VehicleManagement\Modules\ModelYear;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;
use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleMediaCosting;
use App\Models\VehicleManagement\Vehicle\VehicleBuyPayment\VehicleBuyPayment;
use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleMaintenanceCosting;
use App\Models\VehicleManagement\Vehicle\VehicleCosting\VehicleServiceCosting;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var <array>
     * protected guarded $guarded
     */
    protected $guarded = ['id'];

    /**
     * Define public method buyPayments
     * @return HasMany
     */
    public function buyPayments(): HasMany
    {
        return $this->hasMany(VehicleBuyPayment::class, 'vehicle_id', 'id');
    }

    /**
     * Define public method mediaCosting
     * @return HasMany
     */
    public function mediaCosting(): HasMany
    {
        return $this->hasMany(VehicleMediaCosting::class, 'vehicle_id', 'id');
    }

    /**
     * Define public method maintenanceCosting
     * @return HasMany
     */
    public function maintenanceCosting(): HasMany
    {
        return $this->hasMany(VehicleMaintenanceCosting::class, 'vehicle_id', 'id');
    }

    /**
     * Define public method serviceCosting
     * @return HasMany
     */
    public function serviceCosting(): HasMany
    {
        return $this->hasMany(VehicleServiceCosting::class, 'vehicle_id', 'id');
    }

    /**
     * Define public method color
     * @return BelongsTo
     */
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }

    /**
     * Define public method models
     * @return BelongsTo
     */
    public function models(): BelongsTo
    {
        return $this->belongsTo(Models::class, 'model_id', 'id');
    }

    /**
     * Define public method model_year
     * @return BelongsTo
     */
    public function model_year(): BelongsTo
    {
        return $this->belongsTo(ModelYear::class, 'model_year_id', 'id');
    }

    /**
     * relation with User $user Model.
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

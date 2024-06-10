<?php

namespace App\Models\VehicleManagement\Vehicle;

use App\Models\User;
use App\Models\VehicleManagement\Modules\Color;
use App\Models\VehicleManagement\Modules\Models;
use App\Models\VehicleManagement\Modules\ModelYear;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var <array>
     * protected guarded $guarded
     */
    protected $guarded = ['id'];

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

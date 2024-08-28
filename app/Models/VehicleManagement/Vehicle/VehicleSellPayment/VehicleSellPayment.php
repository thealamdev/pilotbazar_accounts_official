<?php

namespace App\Models\VehicleManagement\Vehicle\VehicleSellPayment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;

class VehicleSellPayment extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Define public method paymentMethod
     * @return BelongsTo
     */
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id', 'id');
    }
}

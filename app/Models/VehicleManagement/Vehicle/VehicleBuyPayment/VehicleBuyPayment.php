<?php

namespace App\Models\VehicleManagement\Vehicle\VehicleBuyPayment;

use App\Models\VehicleManagement\Dependency\Payment\Method\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleBuyPayment extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Define protected property $table
     * @var string
     */
    protected $table = 'vehicle_buy_payments';

    /**
     * Define public method paymentMethod
     * @return BelongsTo
     */
    public function paymentMethod() : BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id', 'id');
    }
}

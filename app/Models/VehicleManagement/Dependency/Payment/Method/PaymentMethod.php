<?php

namespace App\Models\VehicleManagement\Dependency\Payment\Method;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * protected guarded properties
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Define proptected property $table
     * @var string
     */
    protected $table = 'payment_methods';
    /**
     * relation with User $user Model.
     * @return BelongsTo
     */
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

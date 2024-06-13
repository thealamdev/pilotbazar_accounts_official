<?php

namespace App\Models\VehicleManagement\Dependency\Bank;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PblBank extends Model
{
    use HasFactory;

    /**
     * Define protected property $guarded
     * @var array
     */
    protected ?array $guarded = ['id'];

    /**
     * Define protected property $table
     * @var string
     */
    protected ?string $table = 'pbl_banks';
}

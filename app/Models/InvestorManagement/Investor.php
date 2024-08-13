<?php

namespace App\Models\InvestorManagement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investor extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var <array>
     * protected guarded $guarded
     */
    protected $guarded = ['id'];

    /**
     * Define public method investedOn()
     */
    public function investedOn()
    {
        return $this->hasMany(InvestedVehicle::class, 'investor_id', 'id');
    }
}

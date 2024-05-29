<?php

namespace App\Models\Investor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    /**
     * protected guarded properties
     */
    protected $guarded = ['id'];
}

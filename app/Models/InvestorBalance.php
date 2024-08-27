<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestorBalance extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     */
    protected $guarded = ['id'];
}

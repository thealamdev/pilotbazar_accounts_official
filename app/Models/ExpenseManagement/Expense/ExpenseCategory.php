<?php

namespace App\Models\ExpenseManagement\Expense;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    use HasFactory;

    /**
     * Define protected property $guarded
     * @var array
     */
    protected $guarded = ['id'];
}

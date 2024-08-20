<?php

namespace App\Models\ExpenseManagement\DailyExpense;

use App\Models\ExpenseManagement\Expense\ExpenseCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyExpense extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define protected property $guarded
     * @var array
     */
    protected $guarded = ['id']; 
}

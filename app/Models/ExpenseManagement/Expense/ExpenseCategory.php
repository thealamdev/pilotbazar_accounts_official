<?php

namespace App\Models\ExpenseManagement\Expense;

use App\Models\ExpenseManagement\DailyExpense\DailyExpense;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExpenseCategory extends Model
{
    use HasFactory;

    /**
     * Define protected property $guarded
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Define public method daily_expense() to get daily expense by category
     * @return belongsToMany
     */
    public function daily_expense()
    {
        return $this->belongsToMany(DailyExpense::class, 'daily_expenses', 'expense_category_id', 'id');
    }

    /**
     * Define public method sub_category() to get sub category
     * @return HasMany
     */
    public function sub_category(): HasMany
    {
        return $this->hasMany(ExpenseSubCategory::class, 'expense_category_id', 'id');
    }
}

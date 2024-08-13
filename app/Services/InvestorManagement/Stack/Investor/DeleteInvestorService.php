<?php

namespace App\Services\InvestorManagement\Stack\Investor;

use App\Models\InvestorManagement\Investor;

class DeleteInvestorService
{
    /**
     * Create static erase method
     * @return bool
     */
    public static function erase(string $id): bool
    {
        $instance = Investor::where('id', $id)->first();
        $response = $instance->delete();
        return $response;
    }
}

<?php

class Helper
{
    /**
     * Define public function for active and inactive status
     * @param string $status
     * @return string
     */
    public static function status($status): string
    {
        if ($status == '1') {
            return "<span class='badge badge-success badge-outline'>Active</span>";
        } else {
            return "<span class='badge badge-secondary badge-outline'>Inactive</span>";
        }
    }

    /**
     * Define public function for show Date Formate
     * @param string $status
     * @return string
     */
    public static function ISOdate($date): string
    {
        return date('d M, Y', strtotime($date));
    }
}

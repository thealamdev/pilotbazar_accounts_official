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
            return "<span class='badge badge-soft-success  my-1  me-2'>Active</span>";
        } else {
            return "<span class='badge badge-soft-danger my-1  me-2'>Inactive</span>";
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

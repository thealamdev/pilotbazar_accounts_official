<?php

use Carbon\Carbon;

class Helper
{
    /**
     * Define public function for active and inactive status
     * @param string $status
     * @return string
     */
    public static function status(?string $status): string
    {
        return $status == '1' ? "<span class='badge badge-soft-success  my-1  me-2'>Active</span>" : "<span class='badge badge-soft-danger my-1  me-2'>Inactive</span>";
    }

    /**
     * Define public function for show Date Formate
     * @param string $date
     * @return string
     */
    public static function ISOdate(?string $date): string
    {
        return date('d M, Y', strtotime($date));
    }

    /**
     * Define public function for show date in human readable form
     * @param string $date
     * @return string
     */
    public static function humanReadableDate(?string $date): string
    {
        return  Carbon::parse($date)->diffForHumans();
    }
}

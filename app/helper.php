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

    /**
     * Define public static method to convert number to word
     */
    public static function numberToWords($number)
    {
        $hyphen      = '-';
        $conjunction = ' and ';
        $separator   = ', ';
        $negative    = 'negative ';
        $decimal     = ' point ';

        $dictionary = array(
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'forty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
            1000                => 'thousand',
            1000000             => 'million',
            1000000000          => 'billion',
            1000000000000       => 'trillion'
        );

        if (!is_numeric($number)) {
            return false;
        }

        if ($number < 0) {
            return $negative . self::numberToWords(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = (int)($number / 10) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = (int)($number / 100);
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . self::numberToWords($remainder);
                }
                break;
            case $number < 1000000:
                $thousands = (int)($number / 1000);
                $remainder = $number % 1000;
                $string = self::numberToWords($thousands) . ' ' . $dictionary[1000];
                if ($remainder) {
                    $string .= $separator . self::numberToWords($remainder);
                }
                break;
            case $number < 1000000000:
                $millions = (int)($number / 1000000);
                $remainder = $number % 1000000;
                $string = self::numberToWords($millions) . ' ' . $dictionary[1000000];
                if ($remainder) {
                    $string .= $separator . self::numberToWords($remainder);
                }
                break;
            case $number < 1000000000000:
                $billions = (int)($number / 1000000000);
                $remainder = $number % 1000000000;
                $string = self::numberToWords($billions) . ' ' . $dictionary[1000000000];
                if ($remainder) {
                    $string .= $separator . self::numberToWords($remainder);
                }
                break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split($fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }

        return $string;
    }
}

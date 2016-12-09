<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 12/9/16
 * Time: 5:07 PM
 */

namespace Spt;


/**
 * Class Util
 * Some often used functions that help you format your special data.
 * @package Spt
 */
class Util
{
    /**
     * Format percentages to 20.34% like.
     * @param $value
     * @return string
     */
    public static function formatRate($value)
    {
        return sprintf('%.2f' .
            '%', $value * 100);
    }

    /**
     * Remove zeroes at the end of the value.
     *
     * @param $value
     * @return float
     */
    public static function trimz($value)
    {
        return (float)$value;
    }
}
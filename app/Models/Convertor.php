<?php

namespace App\Models;


class Convertor
{
    public static function toKmh($speed, $unit)
    {
        if ($unit == 'Km/h')
        {
            return $speed;
        }

        if ($unit == 'knots' OR $unit == 'Kts')
        {
            return $speed * 1.852;
        }

        if ($unit == 'mph')
        {
            return $speed * 1.609344;
        }
    }
}
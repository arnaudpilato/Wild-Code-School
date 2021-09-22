<?php

namespace APP;

class Speedometer
{
    const KMTOMILES = 0.6215;
    const MILESTOKM = 1.609;

    public static function convertKmToMiles($value) : float
    {
        return $value * self::KMTOMILES;
    }

    public static function convertMilesToKm($value) : float
    {
        return $value * self::MILESTOKM;
    }
}
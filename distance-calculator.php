<?php

class Geolocation
{

    public static function fromGeoPoints(
        $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000): float
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));

        $calc = ($angle * $earthRadius) / 1000;
        return number_format($calc, 1);
    }
}

$calc = Geolocation::fromGeoPoints(40.76, -73.984, 38.89, -77.032); // 333.1
echo $calc;
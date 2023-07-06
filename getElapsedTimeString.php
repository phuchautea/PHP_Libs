<?php
function getElapsedTimeString($timestamp)
{
    $elapsedTime = time() - $timestamp;

    if ($elapsedTime < 1) {
        return '0 seconds';
    }

    $timeUnits = [
        ['year', 365 * 24 * 60 * 60],
        ['month', 30 * 24 * 60 * 60],
        ['day', 24 * 60 * 60],
        ['hour', 60 * 60],
        ['minute', 60],
        ['second', 1]
    ];

    foreach ($timeUnits as [$unit, $seconds]) {
        $value = $elapsedTime / $seconds;
        if ($value >= 1) {
            $roundedValue = round($value);
            return $roundedValue . ' ' . ($roundedValue > 1 ? $unit . 's' : $unit) . ' ago';
        }
    }
}

echo getElapsedTimeString(time() - 3600);
?>
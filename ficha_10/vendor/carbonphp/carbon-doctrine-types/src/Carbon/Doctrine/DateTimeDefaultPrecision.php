<?php

declare(strict_types=1);

namespace Carbon\Doctrine;

class DateTimeDefaultPrecision
{
    private static $precision = 6;

    /**
     * Change the layout Doctrine datetime and datetime_immutable precision.
     *
     * @param int $precision
     */
    public static function set(int $precision): void
    {
        self::$precision = $precision;
    }

    /**
     * Get the layout Doctrine datetime and datetime_immutable precision.
     *
     * @return int
     */
    public static function get(): int
    {
        return self::$precision;
    }
}

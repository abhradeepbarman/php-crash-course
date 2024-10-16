<?php

class MathUtils {
    public static float $pi = 3.14;

    public static function square(float $x): float {
        return $x * $x;
    }
}

var_dump(
    MathUtils::$pi,
    MathUtils::square(5.5)
);
<?php
namespace Course;

final class Calculator
{
    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function div($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Nie dziel przez zero");
        }

        return $a/$b;
    }
}

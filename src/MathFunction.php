<?php

class MathFunction
{
    /**
     * Return the sum of two numbers
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * Return the multiplication of two numbers
     *
     * @param $a
     * @param $b
     * @return mixed
     */
    public function multiplication(int $a, int $b): int
    {
        return $a * $b;
    }

    /**
     * Return the division of two numbers
     *
     * @param $a
     * @param $b
     * @return mixed
     */
    public function division(int $a, int $b): int
    {
        return $a / $b;
    }

    /**
     * Return the subtraction of two numbers
     *
     * @param $a
     * @param $b
     * @return mixed
     */
    public function subtraction(int $a, int $b): int
    {
        return $a - $b;
    }
}
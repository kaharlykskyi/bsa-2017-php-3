<?php declare(strict_types=1);

namespace BinaryStudioAcademy\Task1;

class Calculator
{
    /**
     * The method return the result of addition of two integer numbers.
     *
     * @param int $a first operand
     * @param int $b second operand
     * @return int result of addition
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * The method return the result of subtraction of two integer numbers.
     *
     * @param int $a first operand
     * @param int $b second operand
     * @return int result of subtraction
     */
    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }

    /**
     * The method return the result of multiplication of two integer numbers.
     *
     * @param int $a first operand
     * @param int $b second operand
     * @return int result of multiplication
     */
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    /**
     * The method returns the result of division of two integer numbers.
     * If divisor is 0, a DivisionByZeroError exception is thrown.
     *
     * @param int $a dividend
     * @param int $b divisor
     * @return int result of division
     */
    public function divide(int $a, int $b): int
    {
        return intdiv($a, $b);
    }

    /**
     * The method returns the result of raising 2 to a power n
     *
     * @param int $n power
     * @return int result of raising 2 to a power n
     */
    public function pow2(int $n): int
    {
        return 2 ** $n;
    }
}

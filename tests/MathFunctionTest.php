<?php

use PHPUnit\Framework\TestCase;

class MathFunctionTest extends TestCase
{
    private $mathFunction;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->mathFunction = new MathFunction();
    }

    /**
     * Add Returns The Correct Sum
     */
    public function testAddReturnsTheCorrectSum(): void
    {
        $this->assertEquals(4, $this->mathFunction->add(2, 2));
        $this->assertEquals(8, $this->mathFunction->add(3, 5));
    }

    /**
     * Multiplication Returns The Correct Sum
     */
    public function testMultiplicationReturnsTheCorrectSum(): void
    {
        $this->assertEquals(6, $this->mathFunction->multiplication(2, 3));
        $this->assertEquals(24, $this->mathFunction->multiplication(3, 8));
    }

    /**
     * Division Returns The Correct Sum
     */
    public function testDivisionReturnsTheCorrectSum(): void
    {
        $this->assertEquals(4, $this->mathFunction->division(8, 2));
        $this->assertEquals(4, $this->mathFunction->division(12, 3));
    }

    /**
     * Subtraction Returns The Correct Sum
     */
    public function testSubtractionReturnsTheCorrectSum(): void
    {
        $this->assertEquals(6, $this->mathFunction->subtraction(8, 2));
        $this->assertEquals(20, $this->mathFunction->subtraction(32, 12));
    }

    /**
     * Add Does Not Return The Incorrect Sum
     */
    public function testAddDoesNotReturnTheIncorrectSum(): void
    {
        $this->assertNotEquals(5, $this->mathFunction->add(2, 2));
    }
}
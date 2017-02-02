<?php
use Course\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Calculator
     */
    public $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $this->assertEquals(3, $this->calculator->add(1, 2));
    }

    public function testSub()
    {
        $this->assertEquals(-1, $this->calculator->sub(1, 2));
    }

    public function testDivWithValidArguments()
    {
        $this->assertEquals(5, $this->calculator->div(10, 2));
        $this->assertEquals(0, $this->calculator->div(0, 2));
        $this->assertEquals(20, $this->calculator->div(10, 0.5));
    }
    public function testDivWithInvalidArguments()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->assertEquals(5, $this->calculator->div(10, 0));
    }
}

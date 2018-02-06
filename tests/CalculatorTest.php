<?php
use PHPUnit\Framework\TestCase;
use Course\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    public $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @param $a
     * @param $b
     * @param $expected
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $this->calculator->add($a, $b));
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
        $this->assertEquals(-1, $this->calculator->div(-2, 2));
        $this->assertEquals(1, $this->calculator->div(-2, -2));
    }

    public function testDivWithInvalidArguments()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->assertEquals(5, $this->calculator->div(10, 0));
    }

    public function additionProvider()
    {
        return [
            [1, 5, 6],
            [-1, 1, 0],
            [1, 0, 1],
            [0, 0, 0]
        ];
    }
}

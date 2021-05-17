<?php declare(strict_types=1);
namespace App\Tests\Calculator;

use PHPUnit\Framework\TestCase;
use App\Calculator\Calculator;

final class CalculatorTest extends TestCase
{
    public function testCalculatorClass(): void
    {
        $calculator = new Calculator(new \App\Calculator\Add());
        $this->assertInstanceOf(
            Calculator::class,
            $calculator
        );
    }

    /**
     * @dataProvider additionData
     */
    public function testAddition($a, $b, $result, $operand)
    {
        $class = "\App\Calculator\\". $operand;
        $calculator = new Calculator(new $class());
        $answer = $calculator->calculate($a, $b);

        $this->assertSame($result, $answer['answer']);
    }

    public function additionData()
    {
        return [
            [1, 1, 2.0, 'Add'],
            [5, 9, 14.0, 'Add'],
            [23984, 2019, 26003.0, 'Add'],
            [-10, -100, -110.0, 'Add'],
            [10, 2, 8.0, 'Subtract'],
            [10090, 190, 9900.0, 'Subtract'],
            [0, -2, 2.0, 'Subtract'],
            [1234, 234, 1000.0, 'Subtract'],
            [2, 2, 4.0, 'Multiply'],
            [1020, 1234, 1258680.0, 'Multiply'],
            [100000, 2.5, 40000.0, 'Divide'],
            [12345, 50, 246.9, 'Divide'],
        ];
    }
}



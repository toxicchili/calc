<?php

namespace App\Calculator;

class Calculator
{
    private $input;

    const MAXLENGTH = 100;

    const OPERANDS = [
        '+' => 'Add',
        '-' => 'Subtract',
        '/' => 'Divide',
        '*' => 'Multiply'
    ];

    public function __construct(CalculatorInterface $input)
    {
        $this->input = $input;
    }

    public function calculate($a, $b)
    {
        return $this->input->calculate($a, $b);
    }
}

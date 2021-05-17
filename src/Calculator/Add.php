<?php

namespace App\Calculator;

class Add implements CalculatorInterface
{
    public function calculate(float $a, float $b): array
    {
        return ['answer' => $a + $b];
    }
}
<?php

namespace App\Calculator;

class Subtract implements CalculatorInterface
{
    public function calculate(float $a, float $b): array
    {
        return ['answer' => $a - $b];
    }
}
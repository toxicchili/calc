<?php

namespace App\Calculator;

class Multiply implements CalculatorInterface
{
    public function calculate(float $a, float $b): array
    {
         return ['answer' => $a * $b];
    }
}
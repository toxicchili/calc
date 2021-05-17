<?php

namespace App\Calculator;

interface CalculatorInterface
{
    public function calculate(float $a, float $b): array;
}
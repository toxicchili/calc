<?php

namespace App\Calculator;

class Divide implements CalculatorInterface
{
    public function calculate(float $a, float $b): array
    {
        try {
            return ['answer' => (float) $a / $b];
        }
        catch(\Exception $e) {
            $error = $e->getMessage();
        }
        return ['answer' => $answer ?? false, 'error' => $error ?? false];
    }
}
<?php

declare(strict_types=1);

function add(float $a, float $b): float
{
    return $a + $b;
}

function subtract(float $a, float $b): float
{
    return $a - $b;
}

function multiply(float $a, float $b): float
{
    return $a * $b;
}

function divide(float $a, float $b): float
{
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

// --- Step 2: Ask user for input ---
echo "Enter first number: ";
$a = (float) trim(fgets(STDIN));

echo "Enter second number: ";
$b = (float) trim(fgets(STDIN));

echo "Choose operation (+, -, *, /): ";
$operation = trim(fgets(STDIN));

switch ($operation) {
    case '+':
        $result = add($a, $b);
        break;
    case '-':
        $result = subtract($a, $b);
        break;
    case '*':
        $result = multiply($a, $b);
        break;
    case '/':
        try {
            $result = divide($a, $b);
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
            exit;
        }
        break;
    default:
        echo "Invalid operation.\n";
        exit;
}

echo "Result: $result\n";

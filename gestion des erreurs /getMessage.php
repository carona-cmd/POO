<?php


function divide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Division by zero");
    }
    return $a / $b;
}

try {
    $result = divide(5, 0);
    echo $result;
} catch (Exception $e) {
    echo $e->getMessage(); // Outputs: "Division by zero"
}

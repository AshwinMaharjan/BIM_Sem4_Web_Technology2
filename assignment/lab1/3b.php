<?php
function generateFibonacci($terms) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $terms; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

$fibonacciSeries = generateFibonacci(10);
echo implode(", ", $fibonacciSeries);
?>

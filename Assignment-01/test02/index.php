<?php

// Assign variable
$number1 = 10;
$number2 = -8;
$number3 = 19.9;

if ($number1 >= $number2 && $number1 >= $number3) {
    $largest = $number1;
} elseif ($number2 >= $number1 && $number2 >= $number3) {
    $largest = $number2;
} else {
    $largest = $number3;
}

echo "The largest Number is: $largest";



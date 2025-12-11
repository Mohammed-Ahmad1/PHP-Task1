<?php

// 1. Leap year check
$year = 2013;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "This year is a leap year<br>";
} else {
    echo "This year is not a leap year<br>";
}

// 2. Season check
$temperature = 27;
if ($temperature < 20) {
    echo "It is wintertime!<br>";
} else {
    echo "It is summertime!<br>";
}

// 3. Sum with triple if same
$firstInteger = 2;
$secondInteger = 2;
if ($firstInteger == $secondInteger) {
    $result = ($firstInteger + $secondInteger) * 3;
    echo "( $firstInteger + $secondInteger ) * 3 = $result<br>";
} else {
    $result = $firstInteger + $secondInteger;
    echo "$firstInteger + $secondInteger = $result<br>";
}

// 4. Sum equals 30
$firstInteger = 10;
$secondInteger = 10;
$sum = $firstInteger + $secondInteger;
if ($sum == 30) {
    echo $sum . "<br>";
} else {
    echo "false<br>";
}

// 5. Multiple of 3
$number = 20;
if ($number % 3 == 0) {
    echo "true<br>";
} else {
    echo "false<br>";
}

// 6. Range check [20-50]
$number = 50;
if ($number >= 20 && $number <= 50) {
    echo "true<br>";
} else {
    echo "false<br>";
}

// 7. Largest of three numbers
$num1 = 1;
$num2 = 5;
$num3 = 9;
$largest = max($num1, $num2, $num3);
echo $largest . "<br>";

// 8. Electricity bill calculation
$units = 300;
$bill = 0;

if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
} elseif ($units <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
} else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
}
echo $bill . " JOD<br>";

// 9. Calculator
function calculator($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
        default:
            return "Invalid operator";
    }
}
echo calculator(10, 5, '+') . "<br>";
echo calculator(10, 5, '-') . "<br>";
echo calculator(10, 5, '*') . "<br>";
echo calculator(10, 5, '/') . "<br>";

// 10. Voting eligibility
$age = 15;
if ($age >= 18) {
    echo "is eligible to vote<br>";
} else {
    echo "is not eligible to vote<br>";
}

// 11. Positive, negative, or zero
$number = -60;
if ($number > 0) {
    echo "Positive<br>";
} elseif ($number < 0) {
    echo "Negative<br>";
} else {
    echo "Zero<br>";
}

// 12. Grade calculation
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$average = array_sum($scores) / count($scores);

if ($average < 60) {
    $grade = 'F';
} elseif ($average < 70) {
    $grade = 'D';
} elseif ($average < 80) {
    $grade = 'C';
} elseif ($average < 90) {
    $grade = 'B';
} else {
    $grade = 'A';
}
echo $grade . "<br>";

?>
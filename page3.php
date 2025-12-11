<?php

// 1. Display 1-2-3-4-5-6-7-8-9-10
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}
echo "<br>";

// 2. Sum integers 0-30
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo $total . "<br>";

// 3. Pattern A-E
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j <= 5 - $i) {
            echo "A ";
        } else {
            echo chr(ord('A') + $i - 1) . " ";
        }
    }
    echo "<br>";
}

// 4. Pattern 1-5
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j <= 5 - $i) {
            echo "1 ";
        } else {
            echo $i . " ";
        }
    }
    echo "<br>";
}

// 5. Diagonal pattern
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0 ";
        }
    }
    echo "<br>";
}

// 6. Factorial
$number = 5;
$factorial = 1;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo $factorial . "<br>";

// 7. Fibonacci sequence
$n = 10;
$fib = [0, 1];
for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}
echo implode(", ", $fib) . "<br>";

// 8. Count 'c' characters
$text = "Orange Coding Academy";
$count = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if (strtolower($text[$i]) == 'c') {
        $count++;
    }
}
echo $count . "<br>";

// 9. Multiplication table
echo "<table cellpadding='3px' cellspacing='0px'>";
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>" . $i . " * " . $j . " = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// 10. FizzBuzz
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
echo "<br>";

// 11. Floyd's triangle
$n = 5;
$num = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}

// 12. Diamond pattern
$n = 5;
// Upper part
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo chr(ord('A') + $j - 1) . " ";
    }
    echo "<br>";
}
// Lower part
for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo chr(ord('A') + $j - 1) . " ";
    }
    echo "<br>";
}

?>
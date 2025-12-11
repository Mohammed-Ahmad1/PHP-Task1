<?php

function primeNubmer($n) {
    
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo primeNubmer(7);
echo "<br>";
echo "<br>";

function reverseString($str) {
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}
echo reverseString("hello");
echo "<br>";
echo "<br>";

function allLower($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        if (ctype_lower($str[$i])) {
            
        }
       
    }
     echo "string is all lowercase";
}

allLower("hello");
echo "<br>";
echo "<br>";

function swap($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After swapping: a = $a, b = $b";
}

swap(5, 10);
echo "<br>";
echo "<br>";

function armStrongNumber($num) {
    $sum = 0;
    $temp = $num;
    $digits = strlen((string)$num);
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }
    if ($sum == $num) {
        echo "$num is an Armstrong number";
    } else {
        echo "$num is not an Armstrong number";
    }
}

armStrongNumber(153);
echo "<br>";    
echo "<br>";

function isPalindrome($str) {
    $len = strlen($str);
    for ($i = 0; $i < $len / 2; $i++) {
        if ($str[$i] !== $str[$len - $i - 1]) {
            echo "$str is not a palindrome";
            return;
        }
    }
    echo "$str is a palindrome";
}

echo isPalindrome("madam");
echo "<br>";    
echo "<br>";


function removeDuplicates($arr) {
    $unique = array();
    for ($i = 0; $i < count($arr); $i++) {
        $isDuplicate = false;
        for ($j = 0; $j < count($unique); $j++) {
            if ($arr[$i] === $unique[$j]) {
                $isDuplicate = true;
                break;
            }
        }
        if (!$isDuplicate) {
            $unique[] = $arr[$i];
        }
    }
    return $unique;
}

$ray = array(1, 2, 2, 3, 4, 4, 5);
print_r(removeDuplicates($ray));
echo "<br>";
echo "<br>";




?>
<?php

// 1. String conversion functions
$string = "hello world";
echo strtoupper($string) . "<br>"; // Uppercase
echo strtolower($string) . "<br>"; // Lowercase
echo ucfirst($string) . "<br>"; // First letter uppercase
echo ucwords($string) . "<br>"; // First letter of each word capitalized

// 2. Split numeric string to date format
$time = '085119';
$hours = substr($time, 0, 2);
$minutes = substr($time, 2, 2);
$seconds = substr($time, 4, 2);
echo $hours . ':' . $minutes . ':' . $seconds . "<br>";

// 3. Check if sentence contains specific word
$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';
if (stripos($sentence, $word) !== false) {
    echo "Word Found!<br>";
} else {
    echo "Word not found!<br>";
}

// 4. Extract filename from URL
$url = 'www.orange.com/index.php';
$filename = basename($url);
echo $filename . "<br>";

// 5. Extract username from email
$email = 'info@orange.com';
$username = explode('@', $email)[0];
echo $username . "<br>";

// 6. Get last three characters
$str = 'info@orange.com';
$lastThree = substr($str, -3);
echo $lastThree . "<br>";

// 7. Generate random password
$chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$length = 10;
$password = '';
for ($i = 0; $i < $length; $i++) {
    $password .= $chars[mt_rand(0, strlen($chars) - 1)];
}
echo $password . "<br>";

// 8. Replace first word
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';
$words = explode(' ', $sentence);
$words[0] = $newWord;
$result = implode(' ', $words);
echo $result . "<br>";

// 9. Find first different character
$str1 = 'dragonball';
$str2 = 'dragonboll';
$len = min(strlen($str1), strlen($str2));
$difference = '';
for ($i = 0; $i < $len; $i++) {
    if ($str1[$i] !== $str2[$i]) {
        $difference = "First difference between two strings at position $i: \"{$str1[$i]}\" vs \"{$str2[$i]}\"";
        break;
    }
}
echo $difference . "<br>";

// 10. Split string into array
$sentence = "Twinkle, twinkle, little star.";
$parts = explode(',', $sentence);
var_dump($parts);
echo "<br>";

// 11. Next letter
function nextLetter($char) {
    if ($char === 'z') {
        return 'a';
    } else {
        return chr(ord($char) + 1);
    }
}
echo nextLetter('a') . "<br>";
echo nextLetter('z') . "<br>";

// 12. Insert string at specified position
$original = 'The brown fox';
$insert = 'quick ';
$position = 4;
$result = substr_replace($original, $insert, $position, 0);
echo $result . "<br>";

// 18. Get first word
$sentence = 'The quick brown fox';
$firstWord = explode(' ', $sentence)[0];
echo $firstWord . "<br>";

// 13. Remove leading zeros
$number = '0000657022.24';
$result = ltrim($number, '0');
if ($result[0] === '.') {
    $result = '0' . $result;
}
echo $result . "<br>";

// 14. Remove part of string
$sentence = 'The quick brown fox jumps over the lazy dog';
$remove = 'fox';
$result = str_replace($remove, '', $sentence);
$result = trim(str_replace('  ', ' ', $result));
echo $result . "<br>";

// 15. Remove trailing dashes
$string = 'The quick brown fox jumps over the lazy dog---';
$result = rtrim($string, '-');
echo $result . "<br>";

// 16. Remove special characters
$string = '\"1+2/3*2:2-3/4*3';
$result = preg_replace('/[^a-zA-Z0-9\s]/', ' ', $string);
$result = trim(preg_replace('/\s+/', ' ', $result));
echo $result . "<br>";

// 17. Select first 5 words
$sentence = 'The quick brown fox jumps over the lazy dog';
$words = explode(' ', $sentence);
$firstFive = implode(' ', array_slice($words, 0, 5));
echo $firstFive . "<br>";

// 18. Remove commas from numeric string
$number = '2,543.12';
$result = str_replace(',', '', $number);
echo $result . "<br>";

// 19. Print letters from 'a' to 'z'
for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . ' ';
}
echo "<br>";

?>
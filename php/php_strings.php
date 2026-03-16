<?php
// Sample string
$str = "  Hello World from PHP  ";

// 1. strlen() – Length of string
echo "Length of string: " . strlen($str) . "<br>";

// 2. str_word_count() – Number of words
echo "Word count: " . str_word_count($str) . "<br>";

// 3. strpos() – Position of a word
echo "Position of 'World': " . strpos($str, "World") . "<br>";

// 4. strtoupper() – Convert to uppercase
echo "Uppercase: " . strtoupper($str) . "<br>";

// 5. str_replace() – Replace words
echo "After replace: " . str_replace("World", "Everyone", $str) . "<br>";

// 6. strrev() – Reverse string
echo "Reversed string: " . strrev($str) . "<br>";

// 7. trim() – Remove whitespace
echo "Trimmed string: '" . trim($str) . "'<br>";

// 8. explode() – Split string into array
$arr = explode(" ", trim($str));
echo "Exploded array:<br>";
print_r($arr);
echo "<br>";

// 9. substr() – Extract part of string
echo "Substring (0, 5): " . substr($str, 0, 5) . "<br>";

// 10. var_dump() – Display detailed info
echo "var_dump output:<br>";
var_dump($str);
?>
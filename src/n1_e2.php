<?php

// ------------------------------------------
// ----- Exercise 2: Variable (Part 2) ------
//-------------------------------------------


// Variable "Hello, World!"
$greeting = "Hello, World!";
echo "<h4> Initial String:</h4>";
echo $greeting;

// 1. Transform all characters to uppercase and print
echo "<h4>1. Uppercase:</h4>";
$uppercase = strtoupper($greeting);
echo $uppercase . "<br>";

// 2. Length of the string
echo "<h4>2. String Length:</h4>";
$length = strlen($greeting);
echo "$length characters<br><br>";

// 3. Reverse order
echo "<h4>3. Reversed String:</h4>";
$reversed = strrev($greeting);
echo $reversed . "<br><br>";

// 4. Create a new variable and concatenate both strings
echo "<h4>4. Concatenation:</h4>";
$course = "Este es el curso de PHP.";
$concatenated = $greeting . " " . $course;
echo $concatenated . "<br>";
?>

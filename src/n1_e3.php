<?php

// --------------------------------------
// ----- Exercise 3: PHP Operators ------
//---------------------------------------

// -------------------------------------------
// -------- A) Arithmetic Operations ---------
//--------------------------------------------
echo "<hr>"; 
echo "<h3> A) Arithmetic Operations";  
echo "<hr>"; 

// Declare integer variables
$x = 10;
$y = 3;

// Declare double variables
$n = 15.5;
$m = 5.5;

// -------- For X and Y (integers) --------
echo "<h4>Operations for X and Y (integers):</h4>";
echo "X value: $x" . "<br>";
echo "Y value: $y" . "<br>";
echo "Sum (X + Y): " . ($x + $y) . "<br>";
echo "Subtraction (X - Y): " . ($x - $y) . "<br>";
echo "Product (X * Y): " . ($x * $y) . "<br>";
echo "Modulo (X % Y): " . ($x % $y) . "<br>";

// -------- For N and M (doubles) --------
echo "<h4>Operations for N and M (doubles):</h4>";
echo "N value: $n" . "<br>";
echo "M value: $m" . "<br>";
echo "Sum (N + M): " . ($n + $m) . "<br>";
echo "Subtraction (N - M): " . ($n - $m) . "<br>";
echo "Product (N * M): " . ($n * $m) . "<br>";
echo "Modulo (N % M): " . ($n % $m) . "<br>";

// -------- For ALL variables (X,Y,N.M) --------
echo "<h4>Operations for ALL variables (X, Y, N, M):</h4>";
echo "Double of X: " . ($x * 2) . "<br>";
echo "Double of Y: " . ($y * 2) . "<br>";
echo "Double of N: " . ($n * 2) . "<br>";
echo "Double of M: " . ($m * 2) . "<br>";
echo "Sum of all variables: " . ($x + $y + $n + $m) . "<br>";
echo "Product of all variables: " . ($x * $y * $n * $m) . "<br>";



// -------------------------------------------------------
// -------- B) Buid & QA a Calculator Function ---------
//--------------------------------------------------------
echo "<hr>";
echo "<h3> B) Calculator Function";  
echo "<hr>"; 

function calculator($num1, $num2, $operation) {
     
    // Validate that "$num#" inputs are numeric
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: Both parameters must be numeric values";
    }

    // Convert operation to lowercase to handle potential uppercase inputs
    $operation = strtolower($operation);
    
    // Perform the operation based on the third parameter($operation)
    switch ($operation) {
        case 'add':
        case 'addition':
        case '+':
            return $num1 + $num2;
            break;
        case 'subtract':
        case 'subtraction':
        case '-':
            return $num1 - $num2;
            break;
        case 'multiply':
        case 'multiplication':
        case '*':
            return $num1 * $num2;
            break;
        case 'divide':
        case 'division':
        case '/':
            
            // Check for division by zero
            if ($num2 == 0) {
                return "Error: Cannot divide by zero.";
                break;
            }
            return $num1 / $num2;
            break;
        default:
            return "Error: Invalid operation. <br>Use: add, subtract, multiply, or divide. <br>Alternativelly, you can also use the sign of the arithmetic operator (+,-,*,/)";
    }
}

// -------- Testing (QA) the calculator function --------
echo "<h4>QA Calculator:</h4>";

// Test 1: Addition
echo "<h4>Test 1: Addition</h4>";
$result_t1 = calculator(10, 5, 'add');
echo "calculator(10, 5, 'add') = $result_t1";

// Test 2: Subtraction
echo "<h4>Test 2: Subtraction</h4>";
$result_t2 = calculator(10, 5, 'subtract');
echo "calculator(10, 5, 'subtract') = $result_t2";

// Test 3: Multiplication
echo "<h4>Test 3: Multiplication</h4>";
$result_t3 = calculator(10, 5, 'multiply');
echo "calculator(10, 5, 'multiply') = $result_t3";

// Test 4: Division
echo "<h4>Test 4: Division</h4>";
$result4 = calculator(10, 5, 'divide');
echo "calculator(10, 5, 'divide') = $result4";

// Test case 5 to 8 : Using symbols
echo "<h4>Test 5: Using Symbols - (+)</h4>";
$result_t5 = calculator(10, 5, '+');
echo "Using symbol as alternative (Addition): calculator(15, 3, '+') = $result_t5";

echo "<h4>Test 6: Using Symbols - (-)</h4>";
$result_t6 = calculator(10, 5, '-');
echo "Using symbol as alternative (Subtraction): calculator(15, 3, '-') = $result_t6";

echo "<h4>Test 7: Using Symbols - (*)</h4>";
$result_t7 = calculator(10, 5, '*');
echo "Using symbol as alternative (Multiplication): calculator(15, 5, '*') = $result_t7";

echo "<h4>Test 8: Using Symbols - (/)</h4>";
$result_t8 = calculator(10, 5, '/');
echo "Using symbol as alternative (Division): calculator(15, 3, '/') = $result_t8";

// Test 9: Division by zero (error handling)
echo "<h4>Test 5: Division by Zero</h4>";
$result_t9 = calculator(10, 0, 'divide');
echo "Error handling (division by zero): calculator(10, 0, 'divide') = $result_t9";

// Test 10: Invalid operation (error handling)
echo "<h4>Test 6: Invalid Operation</h4>";
$result_t10 = calculator(10, 5, 'power');
echo "Error handling (invalid operatorion):calculator(10, 5, 'power') = $result_t10";

// Test 11: Non-numeric input (error handling)
echo "<h4>Test 7: Non-numeric Input</h4>";
$result_t11 = calculator('abc', 5, 'add');
echo "Error handling (non-numeric):calculator('abc', 5, 'add') = $result_t11";

// Test case 12: Case insensitive operation
echo "<h4>Test 8: Case Insensitive</h4>";
$result_t12 = calculator(20, 4, 'MULTIPLY');
echo "Case Insensitive: calculator(20, 4, 'MULTIPLY') = $result_t12";
?>


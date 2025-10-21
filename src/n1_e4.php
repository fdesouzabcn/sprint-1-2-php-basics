<?php
// -------------------------------------------------------
// ----- Exercise 4: Counting Function (QA & Buikd) ------
//--------------------------------------------------------

function countTo($limit = 10, $step = 1) {
// Validate inputs
    if (!is_numeric($limit) || !is_numeric($step) || $step <= 0 || $limit <= 0) {
        
        // Display specific error messages
        if (!is_numeric($limit) || !is_numeric($step)) {
            echo "Error: Both Limit and Step must be numeric values.<br>";
        }
        if (is_numeric($step) && $step <= 0) {
            echo "Error: Step must be greater than 0<br>";
        }
        if (is_numeric($limit) && $limit <= 0) {
            echo "Error: Limit must be a positive number<br>";
        }
        return;
    }

    // Display the counting parameters
    echo "Counting from 1 to $limit, step by $step:<br>";
    
    // Count and print directly
    $first = true;
    for ($i = $step; $i <= $limit; $i += $step) {
        // Add separator except for the first number
        if (!$first) {
            echo " - ";
        }
        echo $i;
        $first = false;
    }
    echo "<br><br>"; # to create line space beetween the each testing output
}
//-----------------------------------------
//------- Testing (QA) the function -------
//-----------------------------------------
echo "<hr>"; 
echo "<h4>Testing Counting Function:</h4>"; 
echo "<hr>"; 

echo "countTo() = ";
countTo(). "<br>";

echo "countTo(13) = ";
countTo(13). "<br>";

echo "countTo(10,2) = ";
countTo(20, 2). "<br>";

echo "countTo(35,5) = ";
countTo(35, 5). "<br>";

echo "countTo(-15,3) = ";
countTo(-15, 3). "<br>";

echo "<br>";

echo "countTo(15,-3) = ";
countTo(15, -3). "<br>";

echo "<br>";

echo "countTo(-15,'y') = ";
countTo(-15, 'y'). "<br>";

echo "<br>";

echo "countTo('x',-3) = ";
countTo('x', -3). "<br>";
?>

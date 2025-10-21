<?php
// -------------------------------------------------------------------
// ------------------ Exercise 6: Charlie Bit Me! --------------------
//--------------------------------------------------------------------

function isBitten() {
    // Generate a random number between 0 and 1
    $randomNumber = rand(0, 1);
    
    // Return TRUE if 1, FALSE if 0 (50% probability each)
    return $randomNumber === 1;
}

//-----------------------------------------
//------- Testing the function ------------
//-----------------------------------------

echo "<h4>Testing isBitten() Random Function:</h4>"; 


// Test 1: Multiple tests to see the randomness
echo "<hr>"; 
echo "<strong>Test randomness with 10 Attempts:</strong><br>";
echo "<hr>"; 
for ($i = 1; $i <= 10; $i++) {
    $bitten = isBitten();
    echo "Attempt $i: " . ($bitten ? "BITTEN!" : "Safe") . "<br>"; 
}
echo "<br>";

// Test 2: Check Probability (10000 attempts)
echo "<hr>"; 
echo "<strong>Probability Test (100,000 attempts):</strong><br>";
echo "<hr>"; 
$total_Attempts = 100000;
$bitten_Count = 0;
$safe_Count = 0;

for ($i = 1; $i <= $total_Attempts; $i++) {
    if (isBitten()) {
        $bitten_Count++;
    } else {
        $safe_Count++;
    }
}

$bitten_Percentage = ($bitten_Count / $total_Attempts) * 100;
$safe_Percentage = ($safe_Count / $total_Attempts) * 100;

echo "Total attempts: $total_Attempts<br>";
echo "Times bitten: $bitten_Count ($bitten_Percentage%)<br>";
echo "Times safe: $safe_Count ($safe_Percentage%)<br><br>";

echo "<strong>Expected:</strong> ~50% bitten, ~50% safe<br>";
echo "<strong>Result:</strong> The probability is approximately 50/50 <br>";
?>
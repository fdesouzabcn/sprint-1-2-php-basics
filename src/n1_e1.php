<?php 
// ------------------------------------------
// ----- Exercise 1: Variable (Part 1) ------
//-------------------------------------------

// Variables 
$name = "Flavio De Souza";
$age = 42;
$address = "Carrer de Roc Boronat 117";
$isDiscount = false;
$rent_price = 550.95;


// Check with var_dump
echo "<h4>Check Data Type:</h4>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($address);
echo "<br>";
var_dump($isDiscount);
echo "<br>";
var_dump($rent_price);
echo "<br>";

// Print Variables
echo "<h4>Print Variables:</h4>";
echo "Name: $name" . "<br>";
echo "Age: $age" . "<br>";
echo "Address: $address"  . "<br>";
echo "Discount Applied: " . ($isDiscount ? 'Yes' : 'No')  . "<br>";
echo "Rental Price (EUR): $rent_price"  . "<br>";

// Create a Constant 
define ('MY_NAME', 'Flavio De Souza');

// Print the Constant (my name) as a Title (H1)
echo "<h4>Print Constant as Title (H1)</h4>";
echo "<h1>" . MY_NAME . "</h1>";
?>


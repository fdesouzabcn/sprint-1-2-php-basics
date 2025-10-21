<?php

// -------------------------------------------------------------------
// --------------- Exercise 5: Student Grade Check -------------------
//--------------------------------------------------------------------

function getGrade($studentName, $score) {
   
    // Validate that score is numeric AND within valid range (0-100)
    if (!is_numeric($score) || $score < 0 || $score > 100) {
        echo "Student: $studentName<br>";
        echo "Score: $score<br>";
        echo "Grade: <strong>ERROR</strong> - Invalid score (must be numeric and between 0-100)<br><br>";
        return;
    }

    // Determine grade based on score
    if ($score >= 60) {
        $grade = "First Division";
    } elseif ($score >= 45) {
        $grade = "Second Division";
    } elseif ($score >= 33) {
        $grade = "Third Division";
    } else {
        $grade = "Fail";
    }

    // Display the result
    echo "Student: $studentName<br>";
    echo "Score: $score%<br>";
    echo "Grade: <strong>$grade</strong><br><br>";
}

//-----------------------------------------
//------- Testing the function ------------
//-----------------------------------------
echo "<hr>"; 
echo "<h3>Testing Student Grade Function:</h3>"; 
echo "<hr>"; 

// Test 1: First Division students
echo "<strong>First Division Tests (60% or more):</strong><br>";
echo "<hr>"; 
getGrade("Carla", 85);
getGrade("Piertro", 60);

echo "<hr>";

// Test 2: Second Division students
echo "<strong>Second Division Tests (45% - 59%):</strong><br>";
echo "<hr>"; 
getGrade("Diana", 59);
getGrade("Eduardo", 45);

echo "<hr>";

// Test 3: Third Division students
echo "<strong>Third Division Tests (33% - 44%):</strong><br>";
echo "<hr>"; 
getGrade("Gabriel", 33);
getGrade("Helena", 44);

echo "<hr>";

// Test 4: Failed students
echo "<strong>Fail Tests (less than 33%):</strong><br>";
echo "<hr>"; 
getGrade("Jose", 3);
getGrade("Laura", 32);

echo "<hr>";

// Test 5: Edge Cases
echo "<strong>Edge Cases and Error Tests:</strong><br>";
echo "<hr>"; 
getGrade("Maria", 100);      // Maximum valid score
getGrade("Olivia", 60.1);     // Firt Division (just above Second Division)
getGrade("Oleguer", 59.9);     // Second Division (just below First Division)
getGrade("Pedro", -10);       // Invalid: negative
getGrade("Flavio", 150);      // Invalid: over 100
getGrade("Teo", "ABC");    // Invalid: non-numeric


echo "<hr>"; 

// Alternative using rand()
echo "<strong>Alternative Test: Random Score Generation</strong><br>"; 
echo "<hr>"; 

$studentNames = [
    "Carla", "Pietro","Diana", "Carlos","Teo", "Eduardo", "Maria",
    "Olivia", "Helena", "Flavio"
];

echo "<strong>Testing with randomly generated scores:</strong><br><br>";

foreach ($studentNames as $name) {
    $randomScore = rand(0, 100); // Generate random score between 0-100
    getGrade($name, $randomScore);
}
?>


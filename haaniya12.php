<?php
    // LAB 02
    // WORKING ON CONDITIONAL STATEMENT WITH USING
    // IF ELSE, else if and logical operators

    echo "<h1>Conditional Statement With the use of Logical Operators</h1>";
    echo "<br>";

    $solar = false;
    $childAge = 15;

    if ($childAge > 18 && $solar == true) {
        echo "<h3>You can go with your friend!</h3>";
    } 
    else if ($childAge >= 15 && $solar == false) {
        echo "<h3>You should have to go to sleep!</h3>";
    } 
    else if ($childAge <= 15 || $solar == false) {
        echo "<h3>You can go with your parents!</h3>";
    } 
    else {
        echo "<h3>You should have to stay at home!</h3>";
    }
?>
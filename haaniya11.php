<?php
echo "<h1> Conditional Statement </h1>";

// Conditional Statements
// == Equal
// < Less than
// > More than
// <= Less than or equal to
// >= More than or equal to
// != Not equal to
// === Comparison between two numbers

// Conditional Statement

$average = 18;
$state = true;
$isFeed = false;

if ($average >= 18) {
    echo "<h3> You can Drive a Car! </h3>";
    
    if ($state == true) {
        echo "<h5> You can Take My Car! </h5>";
        
        if ($isFeed == true) {
            echo "<h6> You got the Discount </h6>";
        } else {
            // Agar isFeed false hai toh kuch nahi dikhayega ya aap else add kar sakte hain
        }
    } else {
        echo "<h5> You can not get the discount </h5>";
    }
} else {
    echo "<h1> You can't Drive a Car! </h1>";
}
?>
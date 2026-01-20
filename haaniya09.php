<?php
echo "<h1>Eligibility Check</h1>";

// Humne age change karke 16 kar di hai
$age = 16; 

if ($age >= 18) {
    // Agar age 18 ya usse zyada hai
    echo "<h3>You are eligible to Vote!</h3>";
} else {
    // Agar age 18 se kam hai
    echo "<h3>You are too young to vote.</h3>";
}
?>
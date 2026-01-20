<?php
// Weekday checker using switch statement
$currentDay = "Monday"; 

echo "<h2>Weekly Schedule Status</h2>";

switch ($currentDay) {
    case "Monday":
        echo "<b>Status:</b> Today is " . $currentDay . ". Start of the work week!";
        break;
        
    case "Tuesday":
        echo "<b>Status:</b> Today is " . $currentDay . ". Keep going!";
        break;
        
    case "Wednesday":
        echo "<b>Status:</b> Today is " . $currentDay . ". Mid-week reached.";
        break;
        
    case "Thursday":
        echo "<b>Status:</b> Today is " . $currentDay . ". Almost there!";
        break;
        
    case "Friday":
        echo "<b>Status:</b> Today is " . $currentDay . ". Weekend is near.";
        break;
        
    case "Saturday":
    case "Sunday":
        echo "<b>Status:</b> It is " . $currentDay . ". Enjoy your holiday!";
        break;
        
    default:
        echo "<b>Error:</b> Invalid day name entered.";
        break;
}
?>
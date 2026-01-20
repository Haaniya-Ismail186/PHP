<?php
/* Student Result Calculation Script
   Features: Total calculation, percentage, and grading logic.
*/

// 1. Subject Marks Define Karein
$math       = 85;
$english    = 78;
$science    = 92;
$history    = 88;
$computer   = 94;

// 2. Calculation
$totalMarks     = 500;
$obtainedMarks  = $math + $english + $science + $history + $computer;
$percentage     = ($obtainedMarks / $totalMarks) * 100;

// 3. Output Display
echo "<h3>--- Student Result Card ---</h3>";
echo "Total Obtained Marks: " . $obtainedMarks . " / " . $totalMarks . "<br>";
echo "Final Percentage: " . $percentage . "% <br><br>";

// 4. Grading Logic (If-Else)
if ($percentage >= 80 && $percentage <= 100) {
    $grade = "A+";
} elseif ($percentage >= 70) {
    $grade = "A";
} elseif ($percentage >= 60) {
    $grade = "B";
} elseif ($percentage >= 50) {
    $grade = "C";
} elseif ($percentage >= 40) {
    $grade = "D";
} elseif ($percentage < 40 && $percentage >= 0) {
    $grade = "Fail";
} else {
    $grade = "Invalid Entry";
}

echo "<strong>Your Final Grade is: " . $grade . "</strong>";

?>
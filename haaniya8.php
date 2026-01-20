<?php
// Increment aur Assignment ka naya code
echo "<h1>Increment & Operators</h1>";

$number = 10; // Shuruati value 10
echo $number++; // Output: 10 (phir value 11 ho jayegi)
echo "<br>";

echo $number;   // Output: 11
echo "<br>";

echo ++$number; // Output: 12 (pehle 1 barhega phir print hoga)
echo "<br>";

echo ++$number; // Output: 13
echo "<br>";

echo $number++; // Output: 13 (print hone ke baad 14 ho jayegi)
echo "<br>";

echo $number;   // Output: 14
echo "<br>";

echo ++$number; // Output: 15
echo "<br>";

echo ++$number; // Output: 16
echo "<br>";

echo $number;   // Output: 16
echo "<br>";

echo ++$number; // Output: 17
echo "<br>";

echo ++$number; // Output: 18
echo "<br>";

echo ++$number; // Output: 19
echo "<br>";

echo $number++; // Output: 19 (print hone ke baad 20 ho jayegi)
echo "<br>";

echo $number;   // Output: 20
echo "<br>";

echo ++$number; // Output: 21
echo "<br>";

echo $number++; // Output: 21 (print hone ke baad 22 ho jayegi)
echo "<br>";

echo $number;   // Output: 22
echo "<br>";

// Assignment Operators ka istamal
$number += 10;  // Ab value: 22 + 10 = 32
echo $number;   
echo "<br>";

$number *= 2;   // Ab value: 32 * 2 = 64
echo $number;   
?>
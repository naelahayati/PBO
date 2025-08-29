<?php
$x = 100;
$y = 50;

// Operator perbandingan dan logika AND (&&)
if ($x >= 100 && $y == 50) {
    echo "Hello world and!";
}
echo "<br>";

// Operator perbandingan dan logika OR (||)
if ($x == 100 or $y == 80) {
    echo "Hello world or!";
}
echo "<br>";

// Operator perbandingan dan logika AND (&&)
if ($x == 100 && $y <= 50) {
    echo "Hello world! &&";
}
echo "<br>";

// Operator perbandingan dan logika OR (||)
if ($x == 100 || $y == 80) {
    echo "Hello world! ||";
}
echo "<br>";

// Operator perbandingan dan logika NOT (!==)
if ($x !== 100) {
    echo "Hello world! not";
}
echo "<br>";
?>

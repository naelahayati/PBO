<?php
$x = 5;
$y = 10;

var_dump($x != $y);  // Tidak sama nilai
echo "<br>";

$x = 10;
$y = 10;

var_dump($x !== $y); // Tidak identik (nilai atau tipe berbeda)
echo "<br>";

$x = 16;
$y = 10;

var_dump($x == $y);  // Sama nilai
echo "<br>";

$x = 6;
$y = 6;

var_dump($x === $y); // Identik (nilai dan tipe sama)
echo "<br>";

$x = 15;
$y = 10;

echo ($x <=> $y);     // Spaceship operator

echo "<hr>";
$x = 10;
echo ++$x;


echo "<hr>";
$x = 10;
echo $x--;

?>

<?php
echo str_replace("world","Peter","Hello world!");
echo"<br>";echo"<br>";
?>
<?php
echo strstr("Hello world!","world");echo"<br>";echo"<br>";
?>
<?php
echo strncmp("Hello world!","Hello earth!",6);echo"<br>";echo"<br>";
?>
<?php
$num = "2.75";
 
// Cast to integer
$int = (int)$num;
echo gettype($int); echo"<br>";// Outputs: integer
echo $int; // Outputs: 2
 echo"<br>";echo"<br>";
// Cast to float
$float = (float)$num;echo"<br>";
echo gettype($float);echo"<br>"; // Outputs: double
echo $float; // Outputs: 2.75
echo"<br> <br>";
?>
<?php
$a = 32;
echo "a is " . is_numeric($a) . "<br>";

$b = 0;
echo "b is " . is_numeric($b) . "<br>";

$c = 32.5;
echo "c is " . is_numeric($c) . "<br>";

$d = "32";
echo "d is " . is_numeric($d) . "<br>";

$e = true;
echo "e is " . is_numeric($e) . "<br>";

$f = null;
echo "f is " . is_numeric($f) . "<br>";
?>
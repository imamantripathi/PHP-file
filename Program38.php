<?php
// PHP program to show
// standard type casting

$a = 1;
var_dump($a);
echo"<br>";
// int to float
$a = (float) $a;
var_dump($a);
echo"<br>";
// float to double
$a = (double) $a;
var_dump($a);
echo"<br>";
// double to real
$a = (real) $a;
var_dump($a);
echo"<br>";
// real to int
$a = (int) $a;
var_dump($a);
echo"<br>";
// int to integer
$a = (integer) $a;
var_dump($a);
echo"<br>";
// integer to bool
$a = (bool) $a;
var_dump($a);
echo"<br>";
// bool to boolean
$a = (boolean) $a;
var_dump($a);
echo"<br>";
// boolean to string
$a = (string) $a;
var_dump($a);
echo"<br>";
// string to array
$a = (array) $a;
var_dump($a);
echo"<br>";
// array to object
$a = (object) $a;
var_dump($a);
echo"<br>";
// object to unset/NULL
$a = (unset) $a;
var_dump($a);

?>

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
print_r($age);
echo"<br>";
?>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
print_r($age);
echo"<br>";
?>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
print_r($age);
echo"<br>";
?>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
print_r($age);
echo"<br>";
?>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
$size = count($age);
echo"Number of Element: $size";
echo"<br>";echo"<br>";echo"<br>";
?>
<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
?>
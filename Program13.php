<?php
class student
{
public $name="AMAN";
public function gg()
{
echo"<br>This is the function accessed outside";
}
}
$ss= new student;
var_dump($ss);
echo $ss->gg();
?>

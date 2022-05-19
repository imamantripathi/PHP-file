<?php
echo"The line number is: ",__line__."<br>";
echo"The file path is: ",__file__."<br>";
function tryy()
{
echo"The function name is: ",__function__."<br>";
}
tryy();
echo"The line number is: ",__line__."<br>";
class student
{
public function cname()
{
echo"The class name is: ",__class__."<br>";
}
}
$trial=new student();
echo $trial->cname();
echo"The line number is: ",__line__."<br>";
class two
{
public function nee()
{
echo "The method name is: ",__method__."<br>";
}
}
$tryy2=new two;
echo $tryy2->nee();
?>
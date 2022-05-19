<html>
<body>
<?php
$g=11;
$t=58;
function testt()
{
//Local Variable
$x=7;
echo "Value of x inside function: $x";
}
function test2(){
global $g;
echo "<br> gg is a global variable and can be called anywhere: $g<br>";
}
function test3(){
static $f=4;
echo "f is static variable $f";
$f++;
}
function test4(){
echo "t is a global variable ",$GLOBALS['t']."<br>";
}
testt();
echo "<br> x cannot be printed outside function";
test2();
test3();
echo"<br>";
test3();
echo"<br>";
test3();
echo"<br>";
test4();
?>
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
function check($input){
if(is_numeric($input)){
echo"Input is Numeric";
}
else if(ctype_alpha ($input)){
echo" Input is Alphabetic";}
else echo"Input is Neither Number nor Alphbet";

}
$input = 21;echo"<br>";
echo"Input : $input";echo"<br>";
check($input);
echo"<br>";
$input = 'A';echo"<br>";
echo"Input : $input";echo"<br>";
check($input);
echo"<br>";
$input = 'a';echo"<br>";
echo"Input : $input";echo"<br>";
check($input);
echo"<br>";
$input ="#";echo"<br>";
echo"Input : $input";echo"<br>";
check($input);

?>

</body>
</html>
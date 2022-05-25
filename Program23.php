<!DOCTYPE html>
<html>

<body>

<caption><center><b>First 10 Square Numbers</caption><p>

<table border=3 cellspacing=3 cellpadding=3>

<tr><th>Number<th>Sqaure

</tr>

<?php

$count=1; $square=1;

while($count<=10)

{

$square=$count*$count;

echo "<tr><th>",$count,"<th>",$square,"</tr>";

$count++;

}

?>

</body>

</html>
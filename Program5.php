<?php
$a=8;
$b=5;
$temp;
printf("Value in a is: %d <br>", $a);
printf("Value in b is: %d <br>", $b);
$temp=$a;
$a=$b;
$b=$temp;
printf("Now value in a is: %d <br>", $a);
printf("Now value in b is: %d <br>", $b);
echo "Same here now value a is: $a <br>";
echo "Same here now value b is: $b <br>";
?>

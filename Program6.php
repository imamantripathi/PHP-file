<?php
$principal=100;
$rate=0.5;
$time=12;
$napplied=2;
$siamount;
$ciamount;
$siamount=$principal*(1+$rate*$time);
$ciamount=$principal*(1+$rate/$napplied)**($napplied*$time);
echo "Principal is: $principal <br>";
echo "Rate is: $rate <br>";
echo "Time is: $time <br>";
echo "Number of times interest applied is: $napplied <br>";
echo "Simple Interest is: $siamount <br>";
echo "Compound Interest is: $ciamount";
?>
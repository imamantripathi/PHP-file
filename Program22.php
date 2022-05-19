<?php
$x = array("k" => "Love", "l" => "Hate");
$y = array("a" => "Credit", "b" => "Blame");
echo"<pre>";
echo var_dump($x + $y);
echo"</pre>";
echo var_dump($x == $y) . "<br>";
echo var_dump($x != $y) . "<br>";
echo var_dump($x <> $y) . "<br>";
echo var_dump($x === $y) . "<br>";
echo var_dump($x !== $y) . "<br>";
?>

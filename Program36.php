<?php

// PHP function to illustrate the use of array_reverse()
function Reverse($array)
{
	return(array_reverse($array));
}

$array = array("ram", "aakash", "saran", "mohan");

echo "Before:\n";
print_r($array);

echo "\nAfter:\n";
print_r(Reverse($array));

?>

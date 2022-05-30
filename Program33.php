<?php
// Define an indexed array
$colors = array("Red", "Green", "Blue");
print_r($colors);
echo"<hr>";
// Define an associative array
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);
print_r($ages);
echo"<hr>";
// Define an Multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
print_r($contacts);

?>
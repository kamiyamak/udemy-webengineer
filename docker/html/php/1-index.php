<?php

$myArray = array("Rob","Kirstin","Tom","Ralph");

print_r($myArray); //print readable

echo "<br><br>";

echo $myArray[1];

echo "<br><br>";

$anotherArray[0] = "pizza";
$anotherArray[1] = "chocolate";
$anotherArray[5] = "coffee";

print_r($anotherArray);

echo "<br><br>";

$anotherArray["myFavorite"] = "icecream";

print_r($anotherArray);

$thirdArray = array("Flance" => "French",
                "USA" => "English",
                "Germany" => "German");

echo "<br><br>";

print_r($thirdArray);
echo "<br><br>";

echo sizeof($thirdArray);

unset($thirdArray["Flance"]);
echo "<br><br>";

echo sizeof($thirdArray);

print_r($thirdArray);


?>
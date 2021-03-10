<?php

$i = 0;
while($i < 10){
    echo $i."<br>";
    $i++;
}

$family = array("Rob","Kirstin","Tom","Ralph");

$i = 0;

while($i < sizeof($family)){
    echo $family[$i]." Percival, ";
    $i++;
}

echo "<br><br>";

?>
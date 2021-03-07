<?php

for($i = 10;$i >= 0;$i--){
    if ($i == 0){
        echo $i;
    } else {
        echo $i.",";
    }
}

echo "<br><br>";

$family = array("Rob","Kirstin","Tom","Ralph");

for($i = 0;$i < sizeof($family);$i++){
    echo $family[$i].",";
}

echo "<br><br>";

foreach($family as $key => $value){
    // echo $key.": ",$value.".";
    $family[$key] = $value." Percival";
    echo $family[$key].", ";
}

?>
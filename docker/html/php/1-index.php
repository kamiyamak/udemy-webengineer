<?php

$name = "Rob";

echo $name;

echo "<p>私の名前は".$name."です</p>";
echo "<p>私の名前は${name}です</p>";

$myNumber = 45;

echo "<p>番号：${myNumber}</p>";

$calc = $myNumber * 31 / 97 + 4;

echo "<p>計算結果：${calc}</p>";

// Boolean true, false

$myBool = true;

echo "<p>現在${myBool}です</p>";

$myBool = false;

echo "<p>現在${myBool}です</p>";

?>
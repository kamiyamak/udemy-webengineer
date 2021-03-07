<?php

$role = "admin";
$position = "manager";
// $position = "director";


if($role == "admin" || $position == "director"){
    echo "<p>管理画面に進んでください</p>";
} else {
    echo "<p>do not enter </p>";
}

?>
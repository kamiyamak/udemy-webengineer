<?php

session_start();

// $_SESSION['username'] = "rob";
if($_SESSION['email']){
    echo "ログインしています";
} else {
    header("Location: mysql.php");
}

?>
<?php

// mail()
$emailTo = "";
$subject = "hey";
$body = "教えてください。";
$headers ="";

if(mail($emailTo, $subject, $body, $headers)){
    echo "成功";
} else {
    echo "失敗";
}

echo "<br><br>";

?>


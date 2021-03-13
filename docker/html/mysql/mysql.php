<?php
    $link = mysqli_connect("mysql","root","root","memberapp");
    // hostname,db_user,db_pass
    if(mysqli_connect_error()){
        die("失敗しました");
    }

    $name = "Rob O'Grady";
    $query = "SELECT * from users WHERE name = '".mysqli_real_escape_string($link,$name)."'";

    echo $query;
    echo "<p>";
    if($result = mysqli_query($link,$query)) {
        // echo "Insert成功しました";
    }
    while($row = mysqli_fetch_array($result)){
        print_r($row);
    }

    // print_r($row);

    // echo "あなたのメールアドレスは".$row['email']."、パスワードは".$row['password']."です。";
    // // echo "<p>あなたのメールアドレスは".$row['1']."、パスワードは".$row['2']."です。";
    // // echo "<p>あなたのIDは".$row['id']."です。";
?>
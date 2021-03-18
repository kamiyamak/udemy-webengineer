<?php
    session_start();

    // echo $_SESSION['username'];
    $link = mysqli_connect("mysql","root","root","memberapp");
    // hostname,db_user,db_pass
    if(mysqli_connect_error()){
        die("失敗しました");
    }

    // $name = "Rob O'Grady";
    // $query = "SELECT * from users WHERE name = '".mysqli_real_escape_string($link,$name)."'";

    if(array_key_exists('email',$_POST) OR array_key_exists('password',$_POST)){
        // print_r($_POST);
        if($_POST['email'] == ''){
            echo "Eメールアドレスを入力してください";
        } elseif($_POST['password'] == ''){
            echo "パスワードを入力してください";
        } else {
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."'";
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0){
                echo "既にそのメールアドレスは私用されています";
            } else {
                // 未使用の場合の処理を記述
                $query = "INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES (NULL, '', '', ''), (NULL, '".mysqli_real_escape_string($link,$_POST['email'])."', '".mysqli_real_escape_string($link,$_POST['password'])."', '')";
                if(mysqli_query($link,$query)){
                    // echo "登録されました";
                    $_SESSION['email']=$_POST['email'];
                    header("Location: session.php");
                } else {
                    echo "老六に失敗しました";
                }
            }
        }
    }

    // 1.Eメールとパスワードの入力フォーム、登録するボタンを設置する
    // 2.データが入力されているかチェックする
    // 3.メールアドレスが既に私用されていないかチェック
    // 4.重複がなければユーザ登録（テーブルに追加）
    // 5.登録に成功したメッセージを表示する


?>

<form method="post">
    <input name="email" type="text" placeholder="Eメール">
    <input name="password" type="password" placeholder="パスワード">
    <input type="submit" value="登録する">
</form>
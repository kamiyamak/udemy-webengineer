<?php

setcookie("customerId","test",time() + 60 * 60 * 24);

echo $_COOKIE["customerId"];

?>

<form method="post">
    <input name="email" type="text" placeholder="Eメール">
    <input name="password" type="password" placeholder="パスワード">
    <input type="submit" value="登録する">
</form>
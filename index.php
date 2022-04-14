<?php
function h($s){
    return htmlspecialchars($s,ent_quotes, 'utf-8');

}

session_start();
// ログイン済みの場合

if(isset($_session['email'])){

    echo 'ようこそ' .  h($_session['email']) . "さん<br>";

    echo "<a href='/logout.php'>ログアウトはこちら。</a>";

    exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LoginPage</title>
    </head>
    <body>


        <h1>hello world!! ログインをしてください！</h1>
        <form action="login.php" method="post">

            <label for="email">email</label>
            <input type="email" name="email">
            <label for="password">password</label>
            <input type="password" name="password">
            <button type="submit">Sign In!!!</button>


        </form>

        <h1>初めての方はこちら（アカウント作成）</h1>
        <form action="signup.php" method="post">

            <label for="email">email</label>
            <input type="email" name="email">
            <label for="password">password</label>
            <input type="password" name="password">
            <button type="submit">Sign In!!!</button>
            <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>

        </form>



    </body>
</html>


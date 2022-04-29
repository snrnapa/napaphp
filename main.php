<?php




session_start();
// ログイン済みの場合

// $_login_email = $_SESSION['email'];

if(isset($_SESSION['email'])){

// if(isset($_login_email){
    // 変数emailに値が代入されており、なおかつnullではない場合にtrueを返す関数である

    echo 'ようこそ<br>' .  h($_SESSION['email']) . "<br>さん<br>";

    echo "<a href='/logout.php'>ログアウトはこちら。</a>";

    exit;
}


function h($s){
    return htmlspecialchars($s,ENT_QUOTES, 'utf-8');
}







?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LoginPage</title>
        <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">




    </head>
    <body>


        <div class="main_title">Napa's system</div>

        <h1 class="login_title">hello world!! ログインをしてください！</h1>


        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Your Email adress</label>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Input your email adress">
            </div>
        
            <div class="form-group">
                <label for="password">Input Password</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
            </div>

            <button style=
            "margin-top: 20px;"
             type="submit" class="btn btn-primary">Sign In</button>
        </form>









        <h1 class="title" style="margin-top: 100px;">初めての方はこちら（アカウント作成）</h1>
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


<?php




session_start();
// ログイン済みの場合

// $_login_email = $_SESSION['email'];

if(isset($_SESSION['email'])){

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
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <script src="./jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>

        <script>
            $(function(){
                alert('CookHub用のログイン画面です');
            });
        </script>



    </head>
    <body>


        <div class="main_title">Welcom to Napa's Page</div>



        <form class="mainform" action="login.php"  method="post">

            <h1 class="login_title">hello world</h1>


            <div class="form-group napaform">
                <input type="email" name="email" 
                class="form-control napaform" 
                id="formGroupExampleInput" 
                placeholder="Input your email adress">

            </div>
            <div class="form-group napaform">
                <!-- <label for="password">Input Password</label> -->
                <input type="password" name="password" 
                class="form-control napaform" id="formGroupExampleInput2" placeholder="Password">
            </div>

            <button style=
            "margin-top: 20px;"
             type="submit" class="btn btn-primary">Sign In</button>

             <a class="forget" href="fotget.php">Forget Your password?</a>





        </form>


    
        <form action="signup.php" method="post" style="margin-left: 40px;">
            <div class="dropdown napadd">
                <button class="btn btn-secondary dropdown-toggle napadd" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                New_comer(Create_account)</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <input type="email" name="email" 
                        class="form-control napaform" 
                        id="formGroupExampleInput" 
                        placeholder="Input your email adress">

                    </li>
                    <li>
                        <input type="password" name="password" 
                        class="form-control napaform" id="formGroupExampleInput2" placeholder="Password">
                    </li>
                    
                    <li>

                    <button style="margin-top: 20px;"type="submit" class="btn btn-primary">Create</button>






                    </li>
            </div>






















        </form>



    </body>
</html>


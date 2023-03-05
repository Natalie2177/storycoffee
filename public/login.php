<?
require_once "$path/system/users_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = "Login";
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>
    <div class="cont">
   
        <? require_once "$path/components/header.php";?>
        
        <main class = "mainAuth">
            <div class =  mainAuth_window>  
                <h3>Войти в личный кабинет</h3>
                <form action="" method="post">
                    <input type ="text" name="login"  id = "login" autocomplete="off" placeholder="Имя">
                    <input type ="password" name="password"  id = "password" placeholder="Пароль">
                    <input type ="submit" name="send" value="Войти">
                </form>
                <a href = "/signup">Регистрация</a>
                <a href = "/forgot">Забыли пароль?</a>
            </div>
        </main>
        <div class = "modalWindowLeftMenu">
           
            <p> Добро пожаловать, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="public/exit.php"> здесь </a>. </p>
           
        </div>
        <? require_once "$path/components/footer.php";?>
       
    </div>
   
</body>
</html>
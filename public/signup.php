<?
require_once "$path/system/users_signup.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = "Signup";
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>
    <div class="cont">
   
        <? require_once "$path/components/header.php";?>
        <main class = "mainAuth">
            <div class =  "mainAuth_window">
            <h3>Регистрация</h3>
                <p>Зарегистрируйтесь на сайте, чтобы получать скидки и узнавать акционные предложения!</p>
                <form action="" id = "formSignup" method="post">
                    <input type ="text" name="login"  id = "login" autocomplete="off" placeholder="Введите имя">
                    <input type ="email" name="email"  id = "email" placeholder="Введите email">
                    <input type ="password" name="password"  id = "password" placeholder="Придумайте пароль">
                    <input type ="password" name="password2"  id = "password2" placeholder="Повторите пароль">
                    <div id="resultSearchLogin"></div>
                    <input type ="submit" name="signup" value="Регистрация">
                </form>
                <a href = "/login">Войти</a>
                <a href = "/forgot">Забыли пароль?</a>
            </div>
            <script>
            
            login.oninput = ()=>{
                if(login.value.length < 3){
                    login.style.border="1px solid red";
                    resultSearchLogin.innerHTML = "";
                    }
                else{
                   login.style.border="1px solid green";
                    $.ajax({
                        url:"/system/searchLogin.php",
                        type:"post",
                        data:{
                            "login":login.value
                        },
                        success:data =>{
                            resultSearchLogin.innerHTML = data;
                        }
                    })
                }
            }
            email.oninput = ()=>{
                if(email.value.length == 0){
                    email.style.border="1px solid red";
                    resultSearchLogin.innerHTML = "";
                    }
                else{
                    email.style.border="1px solid green";
                    }
                }
            password.oninput = ()=>{
                if(password.value.length < 3){
                    password.style.border="1px solid red";
                    resultSearchLogin.innerHTML = "";
                   }
                else{
                    password.style.border="1px solid green";
                    }
                }
            password2.oninput = ()=>{
                if(password.value.length !== password2.value.length){
                    password2.style.border="1px solid red";
                    resultSearchLogin.innerHTML = "";
                    }
                else{
                    password2.style.border="1px solid green";
                    }
                }     
            formSignup.onsubmit = ()=>{
                if(login.value.length < 3){
                    resultSearchLogin.innerHTML = "Логин должен быть от 3 символов";
                    login.style.border="1px solid red";
                    return false;
                }
                if(password.value.length < 3){
                    resultSearchLogin.innerHTML = "Пароль должен быть от 3 символов";
                    password.style.border="1px solid red";
                    return false;
                }
                if(password.value.length !== password2.value.length){
                    resultSearchLogin.innerHTML = "Пароль не совпадает";
                    password2.style.border="1px solid red";
                    return false;
                }
                if(email.value.length == 0){
                    resultSearchLogin.innerHTML = "Некорректный email";
                    email.style.border="1px solid red";
                    return false;
                }
            }
        
            </script>
           
        </main>
               
        <? require_once "$path/components/footer.php";?>

    </div>
</body>
</html>
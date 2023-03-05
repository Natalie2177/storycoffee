<?
require_once "$path/system/getNews.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title="subscription"
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>
    <div class="cont">
   
        <? require_once "$path/components/header.php";?>
                <main class = "mainSubscription"> 
                    <div id ="subscription_form">               
                        <form action="" class ="subscription_form" method="post">
                            <h3>Подписка на новости и рассылку</h3>
                            <p>Подпишитесь на нашу рассылку прямо сейчас и будьте в курсе новых поставок,<br>
                                скидок и эксклюзивных предложений.</p>
                            <input type="name" name="name2" id="name2" placeholder="Ваше имя" tabindex="0" autocomplete="off" required>
                            <input type="email" name="email2" id="email2" placeholder="Ваш email" tabindex="0" required>
                            <div id="resultSubscription"></div>
                            <input type="submit" name="subscription_form" value="Подписаться">
                        </form>
                    </div>
        <script>

            name2.oninput = ()=>{
                if(name2.value.length < 3){
                    name2.style.border="1px solid red";
                    resultSubscription.innerHTML = "";
                    }
                else{
                    name2.style.border="1px solid green";
                    }
                }
            email2.oninput = ()=>{
                if(email2.value.length == 0){
                    email2.style.border="1px solid red";
                    resultSubscription.innerHTML = "";
                    }
                else{
                    email2.style.border="1px solid green";
                    }
                }
            subscription_form.onsubmit = ()=>{
                if(name2.value.length < 3){
                    resultSubscription.innerHTML = "Имя должно быть от 3 символов";
                    name2.style.border="1px solid red";
                    return false;
                }
                if(email2.value.length == 0){
                    resultSubscription.innerHTML = "Некорректный email";
                    email2.style.border="1px solid red";
                    return false;
                }
            }
        </script>
        </main>
        <? require_once "$path/components/footer.php";?>      
    </div>
</body>
</html>
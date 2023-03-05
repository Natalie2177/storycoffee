<?


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title="forgot"
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>
<div class="cont">
   
   <? require_once "$path/components/header.php";?>
        <main class = "mainAuth">
            <div class="popup_items">
                        <h3>Забыли пароль?</h3>
                        <p>
                            Мы выслали вам на почту проверочный код.<br>
                            Введите его и ниже и придумайте новый пароль
                        </p>
                        <div class="popup_parol">
                            <input type="text" placeholder="Введите код" />
                            <input type="password" placeholder="Введите новый пароль" />
                            <button type="submit">Обновить пароль</button>
                            <a href="#" class="popup_forgot popup_btn-cod"> Отправить код повторно </a>
                        </div>
            </div>
        </main>
     <? require_once "$path/components/footer.php";?>      
    
</div>

</body>
</html>

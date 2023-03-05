<?


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title="Error";
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>

    <div class="cont">

        <? require_once "$path/components/header.php";?>
            <main class = "mainError">
                <div class = "mainError_window">
                    <div class="error">
                        <img src = "../img/coffee-cup.jpg" alt="alt">
                    </div>
                    <div class="text">
                        <p> К сожалению, мы не можем найти страницу, которую вы ищете,<br>
                         вы можете повторить попытку, перейдите на <a href="/public/about.php">Главную страницу</a></p>
                    </div>
                </div>         
            </main>
        <? require_once "$path/components/footer.php";?>
    </div>
</body>
</html>
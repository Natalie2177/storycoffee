<?
require_once "$path/system/getNews.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/jq.js"></script>
    <script src="/js/master.js"></script>
    <?php
    $title = "Blog";
    ?>
</head>
<body>
    <div class="cont">
        <? require_once "$path/components/header.php";?>
        <main class="mainBlog">
            <div class="blog">
                <h2>БЛОГ КАФЕ</h2>
                <img src="img/title-coffee.png"  alt="blog">
                    <p>Кофе – это вкусовой продукт, приготовляемый из обжаренных семян кофейного дерева, 
                    физиологическая ценность которого обусловлена наличием в нем алкалоида кофеина, 
                    ароматических веществ и хлорогеновой кислоты.</p>
            </div>
            <div class="mainNews">
                <?php
                    if(isset($arrNews)){
                        $queryNews = $db->query("SELECT * FROM news ORDER BY `id` ASC LIMIT 3");
                        foreach($queryNews as $row){
                             echo <<<html
                                <h2> {$row['title']} </h2>
                                <div class = mainBlogNews id={$row['id']}>
                                <img src="/img/news/{$row['img']}".jpg>
                                <p> {$row['intro_text']}</p>
                                </div>
                            html;
                        }
                    }
                ?>
            </div>
            <div class="subscrip">               
                <h2>Подписка на новости и рассылку</h2>
                    <p>Подпишитесь на нашу рассылку прямо сейчас и будьте в курсе новых поставок,<br>
                    скидок и эксклюзивных предложений.</p>
                    <a href = "/subscription">Подписаться</a>
            </div>
        </main>
        
        <? require_once "$path/components/footer.php";?>
    </div>
</body>
</html>

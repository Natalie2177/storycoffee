<?

require_once "$path/system/getStar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
    <?php
    $title = "О нас";
    ?>
</head>
<body>
    <div class="cont">
        <? require_once "$path/components/header.php";?>
        <main class = "mainStart">
            <div class = "mainStart_window">
                <div class="slider">
                    <div id = "sliderLine" style="left:0px;">
                        <div class = "sliderLine_contents">
                            <img src = "/img/slide/slide1.png" alt="slider" class="slid">
                            <div class="contents">
                                <h2><span>Story Coffee</span>КОФЕЙНЯ</h2>
                                <p><span>Уютная атмосфера с ароматным кофе и вкусной едой в центре города.</span></p>
                            </div>
                        </div>    
                        <div class = "sliderLine_contents">
                            <img src = "/img/slide/slide2.png" alt="slider" class="slid">
                            <div class="contents">
                                <h2><span>Story Coffee</span> КОФЕЙНЯ</h2>
                                <p><span>Завтраки. Деловые обеды. Сезонные предложения. Детское меню.</span></p>  
                            </div>
                        </div>    
                        <div class = "sliderLine_contents">
                            <img src = "/img/slide/slide3.png" alt="slider" class="slid">
                            <div class="contents">
                                <h2><span>Story Coffee</span>КОФЕЙНЯ</h2>
                                <p><span>Доставка. Бонусная программа. Подарочные карты.</span> </p>  
                            </div>
                        </div>
                    </div>
                    <div class="slideBtnLeft">
                        <div id = "btnPre"> &#8249 </div>
                    </div>
                    <div class="slideBtnRight">
                        <div id = "btnNext"> &#8250 </div>
                    </div>
                </div>
                             
                <div class="wrap">
                    <h2><span>STORY COFFEE</span>МИССИЯ</h2>
                    <img src = "img/coffee_cup2.svg" alt="" width="300px" height="100">
                    <p>Идея, на которой строится деятельность кофейни «Story Coffee»,
                    связана с нашим желанием создавать и поддерживать пространство,
                    внимательного и уважительного отношения к людям. Мы верим,
                    что каждый человек на Земле - достоин уважения.
                    И поэтому все наши усилия направлены на сохранение такой атмосферы,
                    в которой наши гости могли бы отдохнуть, насладиться вкусными блюдами и напитками,
                    а также наполниться добром и душевной теплотой.</p>
                </div>
                <div class="coffee">
                    <div class="coffee_container">
                        <h2>Кофе никогда не был таким вкусным!</h2>
                        <img src="img/title-coffee.png" alt="" class="coffee">
                        <p>Наслаждайтесь совершенно новым подходом к приготовлению кофе собственной обжарки в нашей кофейне который уже оценили наши гости.<br>
                         Мы предлагаем широкий ассортимент десертов: тирамису и чизкейки, торты и пончики а также блинчики с шоколадом, которые полюбились многим нашим гостям.<br>
                         Побывав здесь один раз вам непременно захочется посетить нас снова.<br><span> Будем рады видеть вас!</span></p>
                            <h2>Почему стоит работать именно с нами?</h2>
                            <div class="coffee_menu">
                                <div class="coffee_good">
                                    <img src="/img/good/good-3.png" alt="" class="image">
                                    <h3>ТИПЫ КОФЕ</h3>
                                    <p>Наши профессиональные бариста готовят многообразие кофейных напитков, в том числе и авторские рафы.</p>
                                </div>
                                
                                <div class="coffee_good">
                                <img src="/img/good/good-1.png" alt="" class="image">
                                    <h3>ВИДЫ ЗЕРЕН</h3>
                                    <p>Используем два совершенно разных типа зерен, создающих различный вкус и аромат кофе – арабика и робуста.<br></p>
                                </div>
                                
                                <div class="coffee_good">
                                    <img src="/img/good/good-2.png" alt="" class="image">
                                    <h3>СЛАДОСТИ</h3>
                                    <p>Готовим свежие сладости по свои собственным рецептам. Всегда свежая выпечка для бодрого дня.<br></p>
                                </div>
                                <div class="coffee_good">
                                    <img src="/img/good/good-4.png" alt="" class="image">
                                    <h3>НА ВЫНОС</h3>
                                    <p>Скорость приготовления кофе и его качество сильно превосходит конкурентов.<br></p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class = "reviews_blog"> 
                    <h2>Отзывы</h2>
                    <img src="img/title-coffee.png" alt="" class="coffee">
                        <div class = "reviews">
                            <img src="img/hot-coffee.jpg" alt="" width="500px" height="300px">   
                            <div class="reviews_coffee">
                               <?
                                if(isset($arrStar)){
                                $queryStar = $db->query("SELECT * FROM stars ORDER BY `id`");
                                    foreach($queryStar as $row){
                                        echo <<<html
                                            <div class = "review">
                                                <div class = "review_text">
                                                    <span>Имя: </span> {$row['name']}</br>
                                                    <span>Оценка: </span> {$row['rating']} /5</br>
                                                    <span>Сообщение: </span> <br>{$row['message_star']}
                                                </div>
                                            </div>
                                        html;
                                    }
                                }           
                                ?>
                            </div>
                        </div>
                </div> 
            </div>
        </main>
        <? require_once "$path/components/footer.php";?>
    </div>
    <script>
        const myElem = document.querySelector("img.slid");
            let widthImg = window.getComputedStyle(myElem).width;
                widthImg = parseInt(widthImg);
                let position = 0;
                let step = widthImg;
                let ImgInSlider = 3;
                let finishPosition = -step * (ImgInSlider - 1);
                btnNext.onclick = () =>{
                    if(position <= finishPosition) position = 0;
                    else{
                        position = position - step;
                    }
                    sliderLine.style.left = `${position}px`;
                }
                btnPre.onclick = () =>{
                    if(position >= 0) position = finishPosition;
                    else{
                    position = position + step;
                    }
                    sliderLine.style.left = `${position}px`;
                }
    </script>     
</body>
</html>
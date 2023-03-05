<?
require_once "$path/system/getNews.php";
require_once "$path/system/getStar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="STORYCOFFEE - это кофейня европейского уровня с уютной атмосферой, профессиональными бариста. 
     Мы трепетно заботимся о качестве приготавливаемых нами напитков и блюд. Мы предлагаем широкий ассортимент натурального кофе
     высокого качества и вкусные десерты собственного приготовления. У нас вы сможете купить кофе в зернах, молотый кофе, авторские рафы и чай.
     Доставка. Бонусная программа. Подарочные карты.">
    <link rel="stylesheet" href="/css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&amp;family=Playfair+Display:wght@400;700;900&amp;display=swap" rel="stylesheet">
    <script src="/js/master.js"></script>
    <script src="/js/jq.js"></script>
    <?php
    $title = "About";
    ?>
</head>
    <body>

    <div class="scroll_to_top active" onclick="scrollTopTop()"></div>
        
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
                    <div id = "btnPre"> &#8249 </div>
                    <div id = "btnNext"> &#8250 </div>
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
                                $queryNews = $db->query("SELECT * FROM news ORDER BY `id` ");
                                foreach($queryNews as $row){
                                    echo <<<html
                                        <h2> {$row['title']} </h2>
                                        <div class = mainBlogNews id={$row['id']}>
                                        <img src="/img/news/{$row['img']}".jpg>
                                        <p> {$row['intro_text']}<br>
                                        <a class="readmore" href="/blog">Читать далее...</a></p>
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

                <div class ="shop">
                    <h2>МАГАЗИН КОФЕ</h2>
                    <img src="img/title-coffee.png" alt="shop">
                    <p>Наслаждайтесь совершенно новым подходом к приготовлению кофе собственной обжарки в нашей кофейне который уже оценили наши гости.<br>
                        Мы предлагаем широкий ассортимент десертов: тирамису и чизкейки, торты и пончики а также блинчики с шоколадом, которые полюбились многим нашим гостям.<br>
                        Побывав здесь один раз вам непременно захочется посетить нас снова.</p>
                </div>
                <div class = "mainStart_window_menu"><a href="/shop">Каталог нашей продукции</a></div>
                <div class = "mainStart_window_menu"  id="leftMenu"></div>
                      
                <div class="contact">
                    <h3>Контакты</h3>
                        <p>Наш адрес: г. Орел, ул. Ленина, д. 17</p>
                        <p>Работаем ежедневно для Вас с 8.00 до 20.00</p>
                            <div class="contact_phone">
                                <a href="tel:8 (800) 000-00-800"><img src="/img/phone.svg" alt="phone" style="height: 27px;"> 
                                    <span>8 (800) 000-00-00</span></a>
                            </div>
                </div>
                <div class="location_block">
                    <div class="contact_logo">
                        <img src="img/story2.jpg" alt="logo">
                    </div>
                    <div class="location-section_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2402.9847131910738!2d36.061771617443846!3d52.96668940000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4132109f488c1a3b%3A0x30f3542913a418d5!2z0YPQuy4g0JvQtdC90LjQvdCwLCAxNywg0J7RgNGR0LssINCe0YDQu9C-0LLRgdC60LDRjyDQvtCx0LsuLCAzMDIwMjg!5e0!3m2!1sru!2sru!4v1676741771710!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>  
            </main>
            
            <? require_once "$path/components/footer.php";?>
        </div>  
         
        <script>
                //кнопка наверх
            window.addEventListener('scroll', function() {
                let scroll = document.querySelector('.scroll_to_top');
                scroll.classList.toggle("active", window.scrollY > 500)
            })

            function scrollTopTop() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            }

                //скролл
            const computeSrollWidth = () => {
                window.scrollTo(1, 1);
                
                if (window.pageYOffset == 0) {
                    return 0;
                }
                window.scrollTo(0, 0);

                let div = document.createElement('div');
                div.style.overflowY = 'scroll';
                div.style.width = '50px';
                div.style.height = '50px';
                div.style.color = 'brown';
                document.body.append(div);

                let scrollWidth = div.offsetWidth - div.clientWidth;
                div.remove();
                return scrollWidth;
            }
                //Слайдер
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
                
            //Категории товаров
            fetch("/getCat")
                .then(response => response.json())
                .then(data => {
                    leftMenu.innerHTML = ``;
                    data.forEach((obj, index, arr)=>{
                        let newDiv = document.createElement("div");
                        newDiv.innerHTML = `
                        <div> <img src="/img/good/${obj.img}"/> </div>
                        <div><a href = "#">${obj.name}</a><br></div>
                        `;
                        newDiv.classList.add("mainStart_window_menuPoint");
                        newDiv.setAttribute("data-cat-id", obj.id);
                        leftMenu.append(newDiv);
                    })
                })
                
        
        </script>
    </body>
</html>

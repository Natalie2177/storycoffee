<?


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = "Shop";
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>
    <div class="cont">
   
        <? require_once "$path/components/header.php";?>

        <main class = "mainStart">
            <div class = "mainStart_window">
                <div class ="shop">
                    <h2>МАГАЗИН КОФЕ</h2>
                    <img src="img/title-coffee.png" alt="shop">
                        <p>Наслаждайтесь совершенно новым подходом к приготовлению кофе собственной обжарки в нашей кофейне который уже оценили наши гости.<br>
                        Мы предлагаем широкий ассортимент десертов: тирамису и чизкейки, торты и пончики а также блинчики с шоколадом, которые полюбились многим нашим гостям.<br>
                        Побывав здесь один раз вам непременно захочется посетить нас снова.</p>
                        
                </div>
                <div class="header_bottom">
                    <img src="img/search-form.svg" width="20" height="20" alt="search">
                        <form id = "search" method = "get" action = "/search">
                            <input type="text" name="searchValueHeader" id="searchValueHeader" autocomplete="off" placeholder="Поиск по товарам...">
                            <div class="searchModalHeader" id = "searchModalHeader"></div>
                        </form>
                            <ul>
                                <li><img src="/img/compare.svg"><span>Cравнить</span></li>
                                <li><img src="/img/favorite.svg"><span>Избранное</span></li>
                                <li><img src="/img/korz.svg"><span class = "basket">Корзина</span></li>
                            </ul>
                </div>
                <div class = "mainStart_window_menu"> Каталог нашей продукции</div>
                <div class = "mainStart_window_menu"  id="leftMenu"></div>
                <div class = "mainStart_window_cont" id = "contMenu">  </div>
            </div>
        </main>
         
        <? require_once "$path/components/footer.php";?>

        <script>
            searchValueHeader.oninput = ()=>{
                if(searchValueHeader.value.length>0){
                    fetch(`/system/sysSearch.php?searchProduct=${searchValueHeader.value}`)
                        .then(response => response.text())
                        .then(data => {
                            searchModalHeader.innerHTML = data;
                            console.log(data);
                        })
                }
                else{
                    searchModalHeader.innerHTML = null;
                }
            }

            fetch("/getCat")
                .then(response => response.json())
                .then(data => {
                    leftMenu.innerHTML = ``;
                    data.forEach((obj, index, arr)=>{
                        let newDiv = document.createElement("div");
                        newDiv.innerHTML = `
                        <div> <img src='/img/good/${obj.img}'/> </div>
                        <div><a href = "#">${obj.name}</a><br></div>
                        `;
                        newDiv.classList.add("mainStart_window_menuPoint");
                        newDiv.setAttribute("data-cat-id", obj.id);
                        leftMenu.append(newDiv);
                    })
                })

            fetch(`/getProducts`)
                .then(response => response.json())
                .then(data => {
                    contMenu.innerHTML = ` `;
                    for(let row of data){
                        const newDivCart = document.createElement("div");
                        newDivCart.innerHTML = `
                            <div>
                                <img src="/img/coffee/${row.link_img}" alt="">
                                    <div class="card_favorite"> 
                                        <img width="20" height="20" src="/img/favorite.svg" alt="">
                                    </div>
                            </div>
                            <div>
                                <div>
                                    <div><b>${row.name}</b></div>
                                    <div><b>Цена:</b> ${row.price} &#8381 </div>
                                </div>
                                <div><b>Описание:</b> ${row.desc_product} </div>
                                <div>
                                    <button class="card" data-btn-id=${row.id} >Купить в 1 клик</button>
                                    <button class="card" data-btn-id=${row.id} >Добавить в корзину</button>
                                </div>
                            </div>`;
                        newDivCart.setAttribute("data-card-id", row.id);
                        newDivCart.classList.add("totalCard");
                        contMenu.append(newDivCart);
                    } 
                })
         
        </script>
    </div>
</body>
</html>
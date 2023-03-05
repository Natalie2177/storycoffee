<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
require_once "$path/system/db/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = "Card";
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>
    <div class="cont">
   
        <? require_once "$path/components/header.php";?>

        <main class = "mainStart">
            <div class = "mainStart_window">
                <div class = "mainStart_window_menu"> Товары </div> 
                <div class = "mainStart_window_cont" id = "productMenu">
              
                </div>
            </div>
        </main>
         
        <? require_once "$path/components/footer.php";?>

        <script>

           fetch(`/getProducts`)
                            .then(response => response.json())
                            .then(data => {
                                
                                for (let product of data){
                                        data.forEach((product, id)=>{
                                        let newDiv = document.createElement("div");
                                        newDiv.setAttribute("data-id", product.id);
                                        });
                                productMenu.innerHTML = ` `;
                                
                                const newDivCard = document.createElement("div");
                                newDivCard.innerHTML = `
                                <div>
                                    <img src="/img/coffee/${product.link_img}" alt="">
                                    <div class="card_favorite"> 
                                        <img width="20" height="20" src="/img/favorite.svg" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                    <div><b>${product.name}</b></div>
                                    <div><b>Цена:</b> ${product.price} &#8381 </div>
                                    </div>
                                    <div><b>Описание:</b> ${product.desc_product} </div>
                                    <div>
                                    <button class="card" data-btn-id=${product.id} >Купить в 1 клик</button>
                                    <button class="card" data-btn-id=${product.id} >Добавить в корзину</button>
                                    </div>
                                </div>`;
                                newDivCard.setAttribute("data-card-id", product.id);
                                newDivCard.classList.add("totalCard");
                                productMenu.append(newDivCard);
                               }
                            })
                        
                    
          
        </script>
    </div>
</body>
</html>
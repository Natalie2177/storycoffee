<?
require_once "$path/system/getStar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title="review"
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>
<div class="cont">
   
   <? require_once "$path/components/header.php";?>
        <main class = "mainReview">
                <div class="review_form">
                    <h3>Оставить отзыв</h3>
                    <p> Мы ценим критику. Благодаря обратной связи становимся лучше!</p>
                    <form action=""  id ="review_form" method="post">
                        <h3>Ваша оценка</h3>
                        <div class = "rating" data-total-value="0">
                            <div class="rating_item" data-item-value="5">✰</div>
                            <div class="rating_item" data-item-value="4">✰</div>
                            <div class="rating_item" data-item-value="3">✰</div>
                            <div class="rating_item" data-item-value="2">✰</div>
                            <div class="rating_item" data-item-value="1">✰</div>
                        </div>
                        <div class="form_wrap">
                            <h3>Ваш отзыв</h3>
                            <textarea maxlength="350" name="message_star" class="form_textarea" id = "message"></textarea required>
                            <input type ="text" name="name3"  id = "name3" placeholder="Имя" autocomplete="off" required>
                            <input type ="email" name="email3"  id = "email3" placeholder="Введите email" required>
                            <p>Ваш адрес email не будет опубликован</p>
                            <div id="resultMessage"></div>
                        </div>
                        <input type="submit" name="rating" value="Отправить">
                    </form>
                    
                </div>
                   
            <script>
                const ratingItemList = document.querySelectorAll('.rating_item');
                const ratingItemsArray = Array.prototype.slice.call(ratingItemList);
                    ratingItemsArray.forEach(item =>
                    item.addEventListener('click', ()=> {
                        const {itemValue} = item.dataset;
                        item.parentNode.dataset.totalValue = itemValue;
                    })
                    )
               //Проверка
            name3.oninput = ()=>{
                if(name3.value.length < 3){
                    name3.style.border="1px solid red";
                    resultMessage.innerHTML = "";
                    }
                else{
                    name3.style.border="1px solid green";
                    }
                }
            email3.oninput = ()=>{
                if(email3.value.length < 0){
                    email3.style.border="1px solid red";
                    resultMessage.innerHTML = "";
                    }
                else{
                    email3.style.border="1px solid green";
                    }
                }
            message.oninput = ()=>{
                if(message.value.length < 5 || message.value.length > 50){
                    message.style.border="1px solid red";
                    resultMessage.innerHTML = "";
                    }
                else{
                    message.style.border="1px solid green";
                    }
                }
            review_form.onsubmit = ()=>{
                if(name3.value.length < 3){
                    alert("Имя должно быть от 3 символов");
                    name3.style.border="1px solid red";
                    return false;
                }
                else if(email3.value.length < 3){
                    alert("Некорректный email");
                    email3.style.border="1px solid red";
                    return false;
                }
                else if(message.value.length < 5 || message.value.length > 50){
                    alert("Сообщение должно быть от 5 до 50 символов");
                    message.style.border="1px solid red";
                    return false;
                }
            }
            </script>
        </main>
    <? require_once "$path/components/footer.php";?>      
    
</div>

</body>
</html>

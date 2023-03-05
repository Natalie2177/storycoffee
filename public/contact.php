<?
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&amp;family=Playfair+Display:wght@400;700;900&amp;display=swap" rel="stylesheet">
    <script src="/js/master.js"></script>
    <?php
    $title = "Contact";
    ?>
</head>
<body>
    <div class="cont">
        <? require_once "$path/components/header.php";?>
            <main class = "mainStart">
                <div class="contact">
                    <h3>Контакты</h3>
                    <p>Наш адрес: г. Орел, ул. Ленина, д. 17</p>
                    <p>Работаем ежедневно для Вас с 8.00 до 20.00</p>
                        <div class="contact_phone">
                            <a href = "tel:8 (800) 000-00-800"><img src="/img/phone.svg" alt="phone" style="height: 27px;"> 
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
</body>
</html>

<header>
    <div class="header_menu">     
        <div class="logo_container">
            <img src="../img/story.png" alt="logo"> 
        </div>
        <div class="navbar_menu">
            <ul class="navbar">
                <li><a href="/about">Главная</a></li>
                <li><a href="/main">О нас</a></li>
                <li><a href="/blog">Блог</a></li>
                <li><a href="/shop">Магазин кофе</a></li>
                <li><a href="/contact">Контакты</a></li>
            </ul>
            <div class="header_link">
                <a href= /review>Оставить отзыв</a>
		    </div>  
        </div>
        <div id="menu_btn" type="button">
            <img src="img/menu_burger.svg" alt="menu_burger" width="80px"; height="80px"> 
        </div>
        <div class="header_bottom">
            <ul>
                <li id = "btnEnter"><img src="/img/user.svg"><span>Войти</span>
                    <div class="header_bottom_modalWindowLogin" id="header_bottom_modalWindowLogin">
                        <div id = "close" name = "close">x</div>
                            <a href = /signup>Регистрация</a>
                            <a href = /login>Войти</a>
                    </div>
                </li>
            </ul>
        </div>
                         
    </div>
</header>
<script>
    
    btnEnter.onclick = event=>{
        header_bottom_modalWindowLogin.style.display = "grid";
        if(event.target.id == "close"){
            header_bottom_modalWindowLogin.style.display = "none";
        }
    }
    
    let navbar = document.querySelector('ul.navbar');
    document.getElementById('menu_btn').onclick = ()=>{
    navbar.classList.add('active');
    }
    document.getElementById('menu_btn').onclick = ()=>{
    navbar.classList.toggle('active');
    }


</script>

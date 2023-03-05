<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
require_once "$path/system/db/db.php";

if(@$_SERVER['REDIRECT_URL'] == "" OR $_SERVER['REDIRECT_URL'] == "/about"){
    require_once "$path/public/about.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/login"){
    require_once "$path/public/login.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/signup"){
    require_once "$path/public/signup.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/search"){
    require_once "$path/public/search.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/forgot"){
    require_once "$path/public/forgotPassword.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/review"){
    require_once "$path/public/review.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/admin"){
    require_once "$path/public/admin.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/shop"){
    require_once "$path/public/shop.php";
}

elseif($_SERVER['REDIRECT_URL'] == "/card"){
    require_once "$path/public/card.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/main"){
    require_once "$path/public/main.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/blog"){
    require_once "$path/public/blog.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/subscription"){
    require_once "$path/public/subscription.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/contact"){
    require_once "$path/public/contact.php";
}
elseif($_SERVER['REDIRECT_URL'] == "/getCat"){
    $queryCat = $db -> query("SELECT id, name, img FROM category ORDER BY name");
    $arrCat = $queryCat -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($arrCat);
}
elseif($_SERVER['REDIRECT_URL'] == "/getProducts"){
    $queryProducts = $db -> query("SELECT * FROM products ORDER BY `id`");
    $arr = $queryProducts -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($arr);
}
elseif($_SERVER['REDIRECT_URL'] == "/getProduct"){
    $queryProduct = $db -> query("SELECT * FROM products ORDER BY `id`");
    $arrProduct = $queryProduct -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($arrProduct);
}
elseif($_SERVER['REDIRECT_URL'] == "/getNews"){
    $queryNews = $db -> query("SELECT * FROM news ORDER BY `id`");
    $arrNews = $queryNews -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($arrNews);
}
elseif($_SERVER['REDIRECT_URL'] == "/getStar"){
    $queryStar = $db -> query("SELECT * FROM stars ORDER BY `id`");
    $arrStar = $query -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($arrStar);
}
elseif($_SERVER['REDIRECT_URL'] == "/getUsers"){
    $queryUsers = $db -> query( "SELECT * FROM users ORDER BY `id`");
    $arrUsers = $queryUsers -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($arrUsers);
}
elseif($_SERVER['REDIRECT_URL'] == "/searchLogin"){
    $query = $db -> query ("SELECT * FROM users WHERE login = {$_POST['login']}");
    $numRows = $query -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($numRows);
}
else{
    require_once "$path/public/404.php";
}
?>

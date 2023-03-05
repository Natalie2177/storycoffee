<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
require_once "$path/system/db/db.php";
require_once "$path/system/clear.php";

if(isset($_POST['signup'])){
    $user = R::dispense("users");
    $user -> login = $_POST['login'];
    $user -> password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user -> email = $_POST['email'];
    R::store($user);

    header("Location: /login");
}

?>
<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
require_once "$path/system/db/db.php";
require_once "$path/system/clear.php";

if(isset ($_POST['send'])){
  
$user = R::findOne('users', 'login = ?', [$_POST['login']]);

if(isset($user)){
        if(password_verify($_POST['password'], $user->password)){
            $_SESSION['login'] = $user->login;
            $_SESSION['id_users'] = $user->id;
            header("Location: /about");
        }
    }
}
?>
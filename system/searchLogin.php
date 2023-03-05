<?
session_start();
$path = $_SERVER['DOCUMENT_ROOT'];
require_once "$path/system/db.php";

$query = $db -> query ("SELECT * FROM users WHERE login = {$_POST['login']}");
if($query -> numRows > 0){
    echo "<span><font color = 'red' size = '2.5rem'>Login занят</font></span>";
}
?>
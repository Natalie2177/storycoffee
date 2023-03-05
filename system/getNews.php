<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
require_once "$path/system/db/db.php";
require_once "$path/system/clear.php";

$queryNews = $db -> query("SELECT * FROM news ORDER BY `id` ");

$arrNews = $queryNews -> fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['subscription_form'])){
    $user2 = R::dispense("subscription");
    $user2 -> name = $_POST['name2'];
    $user2 -> email = $_POST['email2'];
    R::store($user2);
    header("Location:/about");
}

?>
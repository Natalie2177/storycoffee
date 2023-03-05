<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
require_once "$path/system/db/db.php";
require_once "$path/system/clear.php";

$queryStar = $db->query("SELECT * FROM stars ORDER BY `id`");
    
$arrStar = $queryStar -> fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['rating'])){
    $star = R::dispense("stars");
    $star -> name = $_POST['name3'];
    $star -> email = $_POST['email3'];
    $star -> rating = $_POST['itemValue'];
    $star -> message_star = $_POST['message_star'];
    R::store($star);
    header("Location:/about");
}
?>
<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
require_once "$path/system/db/db.php";

$queryCat = $db -> query("SELECT id, name FROM category ORDER BY name");

$arrCat = $queryCat -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($arrCat);


$queryProduct = $db->query("SELECT * FROM products WHERE name LIKE '%{$_GET['searchProduct']}%' ORDER BY name");

$arrProduct = $queryProduct -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($arrProduct);

?>

<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
require_once "$path/system/db/db.php";

$queryCat = $db->query("SELECT * FROM category WHERE name LIKE '%{$_GET['searchProduct']}%' ORDER BY name");
    
foreach($queryCat as $row){
    echo <<<html
        <a href = "#"> {$row['name']} </a><br>
    html;
}

$queryProducts = $db->query("SELECT * FROM products WHERE name LIKE '%{$_GET['searchProduct']}%' ORDER BY name");
    
foreach( $queryProducts as $row){
    echo <<<html
    <a href = "/card"> {$row['name']} </a><br>
    html;
}

?>
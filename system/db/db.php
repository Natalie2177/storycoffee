<?
require_once "rb.php";
$dbHost = "localhost";
$dbName = "storycoffee";
$dbUsername = "root";
$dbPassword = ""; 

$db = new PDO("mysql:dbhost=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

R::setup("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);


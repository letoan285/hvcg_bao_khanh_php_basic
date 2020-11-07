<?php 
// 1. ket noi voi co so du  lieu
require_once "./db.php";
// 2. get product by id--> dry=== dont repeat yourself
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();

$product = $stmt->fetch();

if(!$product){
    echo "<h2>There are no products exist</h2>";die;
}

$sql = "DELETE FROM products WHERE id = $id";
$stmt=$conn->prepare($sql);
$stmt->execute();

header("location: index.php");
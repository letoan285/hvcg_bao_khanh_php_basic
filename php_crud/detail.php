<?php
include_once "./header.php";

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

?>
<div class="container">
    <h2>Product Detail</h2>
    <h3>Name: <?=$product['name'];?></h3>
    <div class="mb-5">
        <img width="250" src="<?=$product['image']?>" alt="">
    </div>
    <div>
        <span>Price: </span><strong><?=$product['price'];?></strong>
    </div>

    <a class="btn btn-primary" href="./index.php">Come Back</a>
</div>



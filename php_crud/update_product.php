<?php 

include_once "./db.php";


// 2. thu thap du lieu tu form
$id = $_POST['id'];

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$image = $_POST['image'];
$stock = $_POST['stock'];
$supplier_id = $_POST['supplier_id'];
$slug = $_POST['slug'];

$sql = "update products set name='$name', slug='$slug', price=$price, description='$description', category_id=$category_id, image='$image', supplier_id=$supplier_id, stock=$stock where id = $id";

$stmt=$conn->prepare($sql);
$stmt->execute();

header("location: index.php");
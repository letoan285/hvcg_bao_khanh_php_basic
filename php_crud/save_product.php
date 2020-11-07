<?php

// 1. ket noi voi co so du  lieu
require_once "./db.php";

// 2. thu thap du lieu tu form
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$image = $_POST['image'];
$stock = $_POST['stock'];
$supplier_id = $_POST['supplier_id'];
$slug = $_POST['slug'];

// 3. viet cau query
$sql = "INSERT INTO products (name, price, description, category_id, image, slug, stock, supplier_id) VALUES ('$name', $price, '$description', $category_id, '$image', '$slug', $stock, $supplier_id)";

$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: index.php");

// 4. thuc thi



var_dump($name, $description, $slug);die;
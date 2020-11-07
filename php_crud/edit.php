<?php
include_once "./header.php";

// 1. ket noi voi co so du  lieu
require_once "./db.php";
// 2. get product by id--> dry=== dont repeat yourself
$id = $_GET['id'];
// echo $id;die;
$sql = "SELECT * FROM products WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();

$product = $stmt->fetch();
// var_dump($product);die;
if(!$product){
    echo "<h2>There are no products exist</h2>";die;
}
?>

<div class="container">
    <form action="./update_product.php" method="POST">
        <h2 class="text text-center">Edit Product</h2>
        <input type="hidden" name="id" value="<?=$product['id']?>">
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" value="<?=$product['name']?>" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" value="<?=$product['price']?>" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Product Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="5"> <?=$product['description']?> </textarea>
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="text" value="<?=$product['stock']?>" name="stock" class="form-control" >
        </div>
        <div class="form-group">
            <label for="">Product Slug</label>
            <input type="text" value="<?=$product['slug']?>"  name="slug"  class="form-control" placeholder="vd: the-product-is-ext.html">
        </div>
        <div class="form-group">
            <label for="">Product Image</label>
            <input type="text"  name="image" value="<?=$product['image']?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Category ID</label>
            <select name="category_id" class="form-control" id="">
                <option value="1">Mobile</option>
                <option value="2">Laptop</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Supplier ID</label>
            <select name="supplier_id" class="form-control" id="">
                <option value="1">Apple</option>
                <option value="2">Samsung</option>
            </select>
        </div>
        <div class="form-group">
            <a href="" class="btn btn-warning">Cancel</a>
            <button class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
<?php 
include_once "./db.php";
include "./header.php";
?>

<div class="container">
    <form action="./save_product.php" method="POST">
        <h2 class="text text-center">Create New Product</h2>
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Product Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="text" name="stock" class="form-control" >
        </div>
        <div class="form-group">
            <label for="">Product Slug</label>
            <input type="text"  name="slug"  class="form-control" placeholder="vd: the-product-is-ext.html">
        </div>
        <div class="form-group">
            <label for="">Product Image</label>
            <input type="text"  name="image"  class="form-control">
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
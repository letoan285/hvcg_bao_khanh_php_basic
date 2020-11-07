<?php 
    include "./header.php";
?>

<?php 
//1. mysql , 2. mysqli, 3 pdo, -->12 database khac nhau
//1 ket noi voi co so du lien
require_once "./db.php";

//2. get data from database
$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();
function getCategoryName($id){
    return $id == 1 ? 'Mobile' : 'Laptop';
}
// var_dump($products);die;
?>
<div class="container mt-5">
    <table class="table table-bordered">
        <h2 class="text text-center">Product List</h2>
        <thead>
            <tr>
                <th>STT</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Category</th>
                <th>
                    <a class="btn btn-sm btn-success" href="./create.php">Add new</a>
                </th>
            </tr>
        
        </thead>
        <tbody>
            <?php foreach($products as $key=>$product): ?>
            <tr>
                <td><?=$key+1;?></td>
                <td>
                    <a href="./detail.php?id=<?=$product['id']?>">
                        <img width="90" src="<?=$product['image']?>" alt="">
                    </a></td>
                <td><a href="./detail.php?id=<?=$product['id']?>"><?=$product['name']?></a></td>
                <td><?=$product['price']?></td>
                <td><?= getCategoryName($product['category_id']);?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="./edit.php?id=<?=$product['id']?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="./delete.php?id=<?=$product['id']?>">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>


<?php 
    include "./footer.php";
?>

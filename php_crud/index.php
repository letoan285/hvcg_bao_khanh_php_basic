<?php 
    include "./header.php";
?>

<?php 
//1. mysql , 2. mysqli, 3 pdo, -->12 database khac nhau
//1 ket noi voi co so du lien
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'bao_khanh_db';

try {
    $conn = new PDO("mysql:host=$host; dbname=$dbName; charset=utf8", $username, $password);

} catch(PDOException $e){
    var_dump($e->getMessage());die;
}

//2. get data from database
$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();
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
                    Options
                </th>
            </tr>
        
        </thead>
        <tbody>
            <?php foreach($products as $key=>$product): ?>
            <tr>
                <td><?=$key+1;?></td>
                <td>
                    <a href="./detail.php">
                        <img width="90" src="<?=$product['image']?>" alt="">
                    </a></td>
                <td><a href=""><?=$product['name']?></a></td>
                <td><?=$product['price']?></td>
                <td><?=$product['category_id']?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>


<?php 
    include "./footer.php";
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<?php
// $name = 'Bao'; 
// if($name == 'Bao'){
//     echo "My name is $name";
// } else if($name =='Khanh'){
//     echo "My name is $name";
    
// } else {
//     echo "My name is Unknow";

// }
// Operators
// 1. Arithmathic Operator, toan tu toan hoc +, -, *, /, %
// echo 4+9;
// $num = 6;
// if($num % 2 == 0){
//     echo "$num la so chan";
// } else {
//     echo "$num la so le";
// }

//2. Toan Tu So Sanh, comparision operator, >, <, >=, <=, ==, ===

// $age = 18;

// if($age >= 18){
//     echo "Du do tuoi truong thanh";
// } else {
//     echo 'ban chua du tuoi truong thanh';
// }

// $date = 5; //2,3,4,5,6, 7

// echo cac ngay trong tuan;
// 1->thu 2, ...-> chu nhat;

$date =20;// OK 
// if($date==1) echo "Thu Hai";
// if($date==2) echo "Thu Ba";
// if($date==3) echo "Thu Tu";
// if($date==4) echo "Thu Nam";
// if($date==5) echo "Thu Sau";
// if($date==6) echo "Thu Bay";
// if($date==7) echo "Chu Nhat";

$name = 'Bao'; // declare + assignment
// $name = 'Bao'; // assignment
$name = "khanh"; // re-assignment
// wrong
// asignment vs comparition
// if ($date == 1){
//     echo "thứ hai";
// }else if($date == 2){
//     echo "thứ ba";
// }else
// if ($date == 3){
//     echo "thứ tư";
// }else
// if ($date == 4){
//     echo "thứ năm";
// }else if ($date == 5){
//     echo "thứ sáu";
// }else

// if ($date == 6){
//     echo "thứ 7";
// } else {
//     echo " chủ nhật";
// }
// if($x == 20){
//     // code 
// }

// switch($date){
//     case 'Monday': 
//         echo 'Thu 2';
//         break;
//     case 'Tuesday': 
//         echo 'Thu 3';
//         break;
//     case 3: 
//         echo 'Thu 4';
//     break;
//     case 4: 
//         echo 'Thu 5';
//     break;
//     case 5: 
//         echo 'Thu 6';
//     break;
//     case 6: 
//         echo 'Thu 7';
//     break;
//     default: 
//         echo 'Chu Nhat';
//     break;
// }

// $age = 3;
// $age += 2;
// $age -=1; // *=. /=
// echo $age;

// 4. increment/decrement operator
// $num = 2;
// echo($num++);
// ++$num;
// echo $num--;
// echo --$num;
// echo $num;

// Logical Operator
// $age = 16;
// $sex = 'Female';
// if($age >= 18 || ($age >=16 && $sex == 'Female')){
//     echo 'Den tuoi truong thanh';
// }

// string operator // cong chuoi . 
// array operator // cong array ., .=

//8. condition operator // ternary opertor

// $num = 9;

// if($num > 10){
//     echo 'so nay lon hon 10';
// } else {
//     echo 'so nay be hon hoac bang 10';
// }

// echo $nums > 10 ? 'So nay lon hon 10' : 'So nay nho hon hoac bang 10';


// null coalescing;
// echo $num >= 10 ??  $num1 ?? 'This is false condition';

// loop, vong lap
// for loop, foreach loop, while loop, do .. while loop --> cac phan tu trong array
// $names = ['Toan', 'Bao']; 
// // 1. them ten Khanh vao array
// $names[] = 'Khanh';
// // 2. lap qua tung phan tu va echo ra ouput

// // gia tri khoi tao, dieu kien lap, buoc lap
// $i = 0;
// for($i; $i < count($names); $i++){
//     // viet code
//     echo 'Hello --'.$names[$i] . '<br>';
// }

// $nums = [1,2,3,4,5,6,7,8,9];
// $oddNums = [];
// $evenNums = [];
// dung vong lap for de lay ra/tao ra 2 array: so chan va array so le

// for ($i = 0; $i < count($nums); $i ++){
//     if ($i % 2 == 1){
//     echo 'oddNums';
//     }
//     if ($i %2 == 0){
//     echo '$evenNums';
//     }
//     }

//     var_dump($oddNums);

    // chua dung yeu cau, tao ra chu ko phai echo;

    // ext: $oddNums = [1,3,5,7,9];
// for($i = 0; $i < count($nums); $i++){
//     if($nums[$i] % 2==0){
//         $evenNums[] = $nums[$i];
//     } else {
//         $oddNums[] = $nums[$i];
//     }
// }
// var_dump($oddNums);
// echo "<br> ===";
// var_dump($evenNums);

// $product = ['name' =>'iphone 12', 'price' => 1200, 'supplier'=> 'Apple'];

// foreach($product as $key=>$value){
//    echo("Keys === $key--> value " . $value);
//    echo "<br>";
// }
// $i = 0;
// while ($i <= 10) {
//     echo '$I is less than 10';
//     echo "<br>";
//     $i++;
// }

// $i = 0;
// do {
//     echo '$I is less than 10';
//     echo "<br>";
//     $i++;
// } while ($i <= 10);

// category_id = 1-->Apple
// category_id = 2;-->Samsung;
$src = 'https://drop.ndtv.com/TECH/product_database/images/530201374038PM_635_iPhone_4.png';
$products = [
    ['id' => 1, 'name' => 'Iphone 4', 'price' => 1200, 'image' => $src, 'category_id' => 1],
    ['id' => 2, 'name' => 'Iphone 5', 'price' => 1500, 'image' => $src, 'category_id' => 1],
    ['id' => 3, 'name' => 'Samsung', 'price' => 2500, 'image' => $src, 'category_id' => 2],
];
?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table table-bordered">
            <h3 class="text-center">Product List</h3>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Product Image</td>
                    <td>Product Name</td>
                    <td>Product Price</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                        <?php foreach ($products as $key => $product): ?>
                       
                            <tr>
                                    <td><?php  echo $product['id']; ?></td>
                                    <td>
                                        <a href="">
                                            <img width="100" src="<?php echo $product['image']; ?>" alt="">
                                        
                                        </a>
                                    </td>
                                    <td><?php echo $product['name']; ?></td>
                                    <td><?php echo $product['price']; ?></td>
                                    <!-- <td><?php echo $product['price']; ?></td> -->
                                    <td><?php echo $product['category_id'] == 1 ? "Apple" : "Samsung"; ?></td>
                                    <td>
                                        <a href="" class="btn btn-primary">Sua</a>
                                        <a href="" class="btn btn-danger">Xoa</a>
                                    </td>
                            </tr>
                        <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
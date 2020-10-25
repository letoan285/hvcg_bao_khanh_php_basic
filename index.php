<?php 

$name = "Ngo Gia Bao"; // khai bao, goi

///output
// echo
// print
// var_dump;
// echo $name;
// convention khai bao bien
// container-fluid
//0. kebab-case
//1. camelCase
//2. PascalCase
//3. snake_case

// $my_name_is = 'Khanh';
// $myAddressIs= 'Hanoi, Vietnam';

// echo $my_name_is;
// echo "<br>";
// echo $myAddressIs;

// $MySchoolIs = 'Ams';
// echo $MySchoolIs;
// php --> thong dich // apache
// java, C++, C#-->bien dich // JIT, bytecode
// var int num = 'hello';
// $num = 20;
// $num = 'Hello';
// echo $num;

// data types
//1. integer
$price = 400;
//2. double
$usdPrice = 4.50;
//3. boolean
// $isMarried = true;
// $isGood = false;
//4. null
// $myNull = null;
//5. string // difference between single quote with double quote;
// $myAddress = "Hanoi, Vietnam";
//6. array
// $arr = [1,2,3,4,5, 'Toan', 'Bao', true]; // new syntax
// array tap hop cac phan tu co cung kieu du lieu.
//7. object
//8. resource

// echo "<h1>my address is $myAddress </h1>"; 
// echo '<br>';

// print_r($arr);
// zero-base;
// human, 1 base;
// Bao->output = 1-->wrong;
// echo $arr[6];

// phan loai
// 1. index array
// $arr = [1,3,5, 'yes', "true", 'Hanoi'];
// echo count($arr);
// echo "last index of value -- " . $arr[count($arr)-1];
// 2. association array
// $arr = [2, 'name' => 'Bao', 'Vietname', 3, true, 'age' => 20, 'Donald Trump', 'address' => 'Hanoi'];
// echo $arr['name'];
// echo $arr['address'];
// echo $arr['age'];

// $arr[] = 'Do Gia Khanh';
// // 3. multiple dimention array; stack
// $myArr = [];
// $myArr[] = 1;
// $myArr[] = 2;
// $myArr[] = 3;

// $arr = [1, 3, [4, 5], 'yes', [6, 7, [8,9, [10, 11]]]]; // array 5 chieu
// var_dump($arr[4][2][2][0]);
// object, resource
// asignment operator
$age = 3;
$age += 2;
echo $age;
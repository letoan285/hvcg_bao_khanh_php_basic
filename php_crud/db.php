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
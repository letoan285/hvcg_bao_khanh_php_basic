<?php 
// echo 'thank for login';
$rightEmail = 'admin@gmail.com';
$rightPassword = '123456';

$username = $_POST['username'];
$password = $_POST['password'];
// die('login');
if($username != $rightEmail || $password != $rightPassword){
    header("location: home.php");
} else {
    setcookie('email', $rightEmail, time()+36000);
    setcookie('password', $rightPassword, time()+36000);
    header("location: admin.php");
}
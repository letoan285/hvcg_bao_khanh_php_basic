<?php 
$email = $_COOKIE['email'];
$pass = $_COOKIE['password'];

if($email && $pass){
    echo "<h1>This is admin page</h1>";

    ?>
    <h2><a href="./logout.php">Logout</a></h2>

    <?php

} else {
    header("location: home.php");
}
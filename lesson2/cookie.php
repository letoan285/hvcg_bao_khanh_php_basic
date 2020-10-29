<?php 
setcookie('my_name', 'Le Van Toan', time()+86400*30);

$name = $_COOKIE['my_name'];

echo $name;
<?php 
// reset($email);
// reset($password);
// reset('password');
setcookie('email', '', -1);
setcookie('password', '', -1);
header("location: home.php");
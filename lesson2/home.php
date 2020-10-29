<?php
$email = isset($_COOKIE['email']); 
$password = isset($_COOKIE['password']);
if($email && $password){
    header("location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-8 offset-2">
    
        <form action="./login.php" method="POST">
        <h3 class="text-center mt-5">Trang CHu, vui long Login to System</h3>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
    </div>
    </div>
</body>
</html>


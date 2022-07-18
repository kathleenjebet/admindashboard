<?php
session_start();
//database connection
require_once('connection.php');
//setting
if(isset($_POST['login'])){
    //fetch form data
    $username=$_POST['username'];
    $password=$_POST['password'];
    $newPass=md5($password);

    //perform the sql query
    $sql=mysqli_query($conn,"SELECT * FROM account WHERE username='$username 'and password='$newPass'");
    $fetch=mysqli_fetch_array($sql);
    if($fetch >0 ){
        $_SESSION['login']=$username;
        
        header('location:index.php');
    }
    else{
        echo"error";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>

<body>
    <div class="header text-center text-white">
        <h2>Zalego|Admin Register</h2>
    </div>
    <br>
    <br>
    <br>
    <div class="text-centre">
        <img src="images/zalegooo.png" alt="logo" class="rounded-circle">
        <span></span>
    </div>
    <br>
    <br>
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <form action="login.php" method="POST" class="form-group" autocomplete="of">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label class="form-group">Username:</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-group">Password:</label>
                        <input type="password" class="form-control" name="password">
                    </div> 

                </div>
            </div>
            <br>
            <button type="submit" name="login" class="btn btn-primary">submit</button>
            <p>
                Have no account?sign up <a href="register.php">Here</a>
            </p>
        </form>
    </div>


</body>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>
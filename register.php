<?php 
$msg='data submitted successfully';
require_once('processregister.php')



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
    <title>register</title>
</head>

<body>
    <div class="header text-centre text-white">
        <h2>Zalego|Admin Register</h2>
    </div>
    <br>
    <br>
    <br>
    <div class="text-centre col-lg-6 offset-lg-3">
        <span></span>
        <img src="images/zalegooo.png" alt="logo" class="rounded-circle">
        <span>
            <?php echo $msg ?>
        </span>
    </div>
    <br>
    <br>
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <form action="register.php" method="POST" class="form-group" autocomplete="of">
            <div class="justify-content-centre align-items-centre">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="form-group">Username:</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-group">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-group">Password:</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-group">Confirm password:</label>
                        <input type="password" class="form-control" name="cpassword">
                    </div>
                    <br>
                    <div class="form-group">
                        <br>
                        <input type="submit" name="submitbutton" class="btn btn-primary">
                    </div>
                </div>
            </div>
            <p>Have account?sign in <a href="login.php">Here</a></p>
















        </form>
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
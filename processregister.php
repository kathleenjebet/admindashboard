<?php
require_once('connection.php');
  if (isset($_POST['signUp']))
  {

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpass=$_POST['cpassword'];

    $passHash=md5($password);

    $sqlUsername= mysqli_query($conn,"SELECT *FROM account WHERE username ='$username' and password='$passHash' ");
    $checkUsername=mysqli_num_rows($sqlUsername);

    $sqlEmail=mysqli_query($conn,"SELECT *FROM account WHERE email= '$email' ");
    $checkEmail=mysqli_num_rows($sqlEmail);

    if ($checkUsername !=0){
      $msg="Username already exist";
    }
    else if($checkEmail != 0){
      $msg="email already in use.please try a diffrent email address";
    }
    //password confirmation
    else if($password !=$cpass){
      $msg="passwords do not match";
    }
    else{
      //create insert query
      $sql=mysqli_query($conn,"INSERT INTO account (username,email,password) 
      VALUES('$username','$email','$passHash')");

      if($sql)
      {
        $msg="data submitted successfuly";
        header('location:index.php');
      }
      else{
        $msg='Error';
      }
    }

  


















  }




?>
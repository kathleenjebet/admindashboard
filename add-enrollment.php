<?php
require_once('logics/dbconnection.php');
if (isset ( $_POST['addstudents']))
{     
      $fullname=$_POST['fullname'];
      $phonenumber=$_POST['phonenumber'];
      $emailaddress=$_POST['emailaddress'];
      $gender=$_POST['gender'];
      $course=$_POST['course'];

    $insertData =mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,emailaddress,gender,course)VALUES('$fullname','$phonenumber','$emailaddress','$gender','$course')");
    if($insertData){
        echo "Data submitted successfuly";
        header('location:students.php');
    }
    else
     {
        echo "Connection failed" .mysqli_error($conn);
     }
}
 
?>







<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/header.php')?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>

	</div>
    <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow">
            <div class="card-header text-center bg-dark text-white">
              <h4>Add Students:
              </h4>
              <span></span>
            </div>
            <div class="card-body">
              <form action="add-enrollment.php?id" method="POST">

                <div class="row">
                  <div class="mb-3 col-lg-6 ">

                    <label for="fullname" class="form-label">Full name:</label>
                    <input type="text" name="fullname" value="" class="form-control" placeholder="Enter your full name"required>
                  </div>
                  <div class="mb-3 col-lg-6">
                    <label for="phonenumber" class="form-label">Phone Number:</label>
                    <input type="tel" name="phonenumber" value="" class="form-control" placeholder="Enter your phonenumber"required>
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3 col-lg-6 ">
                    <label for="emailaddress" class="form-label">Email Address:</label>
                    <input type="email" name="emailaddress" value="" class="form-control" placeholder="Please enter your email"required>
                  </div>
                  <div class="mb-3 col-lg-6">
                    <label for="gender" name="gender" class="form-label">What's your gender?</label>
                    <select class="form-control"required name="gender">
                      <option> </option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>

                  </div>
                  <div class="mb-3 col-lg-6 ">
                    <label for="courses" class="form-label">What's your prefferd course?</label>
                    <select class="form-control bg-$pink-400 rounded" name="course">
                      <option></option>
                      <option value="Androiod App Development">Andriod App Development</option>
                      <option value="Web Design and Development">Web Design and Development</option>
                      <option value="Data Analysis">Data Analysis</option>
                      <option value="Cyber Security">Cyber Security</option>
                    </select>
                  </div>
                  <div class="lg-12">

                  </div>
                  
                </div>
                <div class="row pt-3">
                <div class="col-lg-6">
                <button type="submit" name="addstudents"  class="btn btn-outline-primary">Add User</button>
                </div>

                
                </div>

              </form>


    
    <?php require_once('includes/scripts.php')?> 
</body>
</html>
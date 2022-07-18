<?php
//databaseconnection
require_once("logics/dbconnection.php");
$sqlFetchStudent=mysqli_query($conn,
"SELECT *FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchStudentsRecords=mysqli_fetch_array($sqlFetchStudent))
{
    $firstname=$fetchStudentsRecords['firstname'];
    $lastname=$fetchStudentsRecords['lastname'];
    $phonenumber=$fetchStudentsRecords['phonenumber'];
    $email=$fetchStudentsRecords['email'];
    $message=$fetchStudentsRecords['message'];
    $created_at=$fetchStudentsRecords['created_at'];

    
}





?>

<!DOCTYPE html>
<html>
<?php require_once('includes/header.php')?>

<body>
  <!-- All our code. write here   -->

  <?php require_once('includes/navbar.php')?>

  <div class="sidebar">
    <?php require_once('includes/sidebar.php')?>

  </div>
  <div class="main-content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card-header text-white bg-dark text-center">
                    <h4 class="card-title">Personal Information</h4>

                </div>
                <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">First Name:  <span class="float-right badge badge-primary"><?php echo $firstname?></span></li>
                    <li class="list-group-item">Lastname:  <span class="float-right badge badge-secondary "> <?php echo $lastname ?></span></li>
                    <li class="list-group-item">Phone Number: <span class="float-right badge badge-info" > <?php echo $phonenumber ?></span></li>
                    <li class="list-group-item">Email: <span class="float-right badge badge-info" > <?php echo $email ?></span></li>
                </ul>
                    

                </div>

            </div>
            <div class="col-lg-6">
                <div class="card-header text-white bg-dark text-center">
                    <h4 class="card-title">Other Information</h4>

                </div>
                <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">Message: <span class="float-right badge badge-info" > <?php echo $message ?></span></li>
                    <li class="list-group-item">Enrolled On: <span class="float-right badge badge-info" > <?php echo $created_at ?></span></li>
                </ul>
                    

                </div>

            </div>
        </div>


  </div>

  <?php require_once('includes/scripts.php')?>
</body>

</html>
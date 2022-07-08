<?php
require_once('logics/dbconnection.php');
$queryuser=mysqli_query($conn,"SELECT *FROM enrollment WHERE no='" .$_GET['id']."' ");
 while ($fetchuser=mysqli_fetch_array($queryuser))
 {
    $fullname=$fetchuser['fullname'];
    $phonenumber=$fetchuser['phonenumber'];
    $emailaddress=$fetchuser['emailaddress'];
    $gender=$fetchuser['gender'];
    $course=$fetchuser['course'];
 }
session_start();
 //update user records

 if(isset($_POST['update records'])){

  //fetch form data
  $name=$_POST['fullname'];
  $phone=$_POST['phonenumber'];
  $email=$_POST['emailaddress'];
  $formGender=$_POST['gender'];
  $formCourse=$_POST['course'];

//update records
   $updateQuery=mysqli_query($conn ,
   "UPDATE enrollment SET fullname='$name', phonenumber='$phone',emailaddress='$email',gender='$formGender',course='$formCourse' 
   WHERE no='" .$_GET['id']."'");
   
   if($updateQuery){
    echo"data updated";
   }
else{
  echo "error occcured";
}
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
        <div class="col-lg-12">
          <div class="card shadow">
            <div class="card-header text-center bg-dark text-white">
              <h4>Edit Students:
                <?php echo $fullname ?>
              </h4>
            </div>
            <div class="card-body">
              <form action="edit-enrollment.php" method="POST">

                <div class="row">
                  <div class="mb-3 col-lg-6 ">

                    <label for="fullname" class="form-label">Full name:</label>
                    <input type="text" name="fullname" value="<?php echo $fullname?>" class="form-control" placeholder="Enter your full name">
                  </div>
                  <div class="mb-3 col-lg-6">
                    <label for="phonenumber" class="form-label">Phone Number:</label>
                    <input type="tel" name="phonenumber" value="<?php echo $phonenumber?>" class="form-control" placeholder="Enter your phonenumber">
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3 col-lg-6 ">
                    <label for="emailaddress" class="form-label">Email Address:</label>
                    <input type="email" name="emailaddress" value="<?php echo $emailaddress?>" class="form-control" placeholder="Please enter your email">
                  </div>
                  <div class="mb-3 col-lg-6">
                    <label for="gender" name="gender" class="form-label">What's your gender?</label>
                    <select class="form-control" name="gender">
                      <option> <?php echo $gender ?> </option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>

                  </div>
                  <div class="mb-3 col-lg-6 ">
                    <label for="courses" class="form-label">What's your prefferd course?</label>
                    <select class="form-control bg-$pink-400 rounded" name="course">
                      <option> <?php echo $course?> </option>
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
                <button type="submit" name="submitbutton" name="update all records" class="btn btn-outline-primary">Update Application</button>
                </div>

                
                </div>

              </form>




            </div>
          </div>
        </div>
      </div>

    </div>






  </div>

  <?php require_once('includes/scripts.php')?>
</body>

</html>
<?php
$messages="";
require_once('logics/dbconnection.php');
$queryuser=mysqli_query($conn,"SELECT *FROM contactus WHERE no='" .$_GET['id']."' ");
 while ($fetchuser=mysqli_fetch_array($queryuser))
 {
    $id=$fetchuser['no']; 
    $firstname=$fetchuser['firstname'];
    $lastname=$fetchuser['lastname'];
    $phonenumber=$fetchuser['phonenumber'];
    $email=$fetchuser['email'];
    $message=$fetchuser['message'];
 }
session_start();
 //update user records

 if(isset($_POST['Update'])){

  //fetch form data
  $name=$_POST['fullname'];
  $lname=$_POST['lastname'];
  $phone=$_POST['phonenumber'];
  $emailaddress=$_POST['email'];
  $formmessage=$_POST['message'];

//update records
   $updateQuery=mysqli_query($conn ,
   "UPDATE contactus SET firstname='$name',lastname='$lname', phonenumber='$phone',email='$emailaddress',message='$formmessage' 
   WHERE no='" .$_GET['id']."'");
   
   if($updateQuery){
    $messages="data updated";
    header('location:contactus.php');
   }
else{
  $messages="error occcured".mysqli_error($conn);
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
              <h4>Edit Messages:

                <?php echo $firstname ?>
              </h4>
              <span><?php echo$messages?></span>
            </div>
            <div class="card-body">
              <form action="editcontactus.php?id=<?php echo $id ?>" method="POST">

                <div class="row">
                  <div class="mb-3 col-lg-6 ">

                    <label for="fullname" class="form-label">First name:</label>
                    <input type="text" name="fullname" value="<?php echo $firstname?>" class="form-control" placeholder="Enter your first name">
                  </div>
                  <div class="mb-3 col-lg-6">
                    <label for="lastname" class="form-label">Last Name:</label>
                    <input type="text" name="lastname" value="<?php echo $lastname?>" class="form-control" placeholder="Enter your lastname">
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3 col-lg-6 ">
                    <label for="phonenumber" class="form-label">PhoneNumber:</label>
                    <input type="tel" name="phonenumber" value="<?php echo $phonenumber?>" class="form-control" placeholder="Please enter your phone number">
                  </div>
                  <div class="mb-3 col-lg-6">
                  <label for="emailaddress" class="form-label">Email Address:</label>
                    <input type="email" name="email" value="<?php echo $email?>" class="form-control" placeholder="Please enter your email">
                  </div>
                  </div>
                  <div class="mb-3 col-lg-12 ">
                    <label for="emailaddress" class="form-label">Message:</label>
                    <input type="text" name="message" value="<?php echo $message?>" class="form-control" placeholder="Please enter your message">
                  </div>
                  <div class="lg-12">

                  </div>
                  
                </div>
                <div class="row pt-3">
                <div class="col-lg-6">
                <button type="submit" name="Update"  class="btn btn-outline-primary">Update</button>
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
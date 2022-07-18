<?php 
require_once ('logics/dbconnection.php');
$sqlDeleteStudent=mysqli_query($conn,"DELETE FROM contactus WHERE no='" .$_GET['id']."'");
if($sqlDeleteStudent)
{
    echo "user records deleted";
    header('location:contactus.php');
}
else
{
echo"error occured";
}


?>
<?php 
require_once ('logics/dbconnection.php');
$sqlDeleteStudent=mysqli_query($conn,"DELETE FROM enrollment WHERE no='" .$_GET['id']."'");
if($sqlDeleteStudent)
{
    echo "user records deleted";
    header('location:students.php');
}
else
{
echo"error occured";
}


?>
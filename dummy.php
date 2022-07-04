<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="web2";

$conn =mysqli_connect($server,$username,$password,$database);

$sqlquery=mysqli_query($conn,"SELECT * FROM enrollment ");
//$fetchrecords=mysqli_fetch_array($sqlquery);
//echo $fetchrecords['firstname'].'  '.$fetchrecords['message'];


while ($fetchrecords=mysqli_fetch_array($sqlquery)) {
    # code...
    echo $fetchrecords['firstname'].'  '.$fetchrecords['message'] ."<br>";
}
?>
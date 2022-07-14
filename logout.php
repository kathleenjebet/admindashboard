<?php
//startsession 
session_start();
//database connection
require_once('connection.php');
//unset session
unset($_SESSION['login']);
//destroy session
session_destroy();
header('location:login.php');

?>
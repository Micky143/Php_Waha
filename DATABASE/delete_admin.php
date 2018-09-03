<?php
$username=$_REQUEST["username"];
include "connection.php";
$query="delete from admin WHERE username='$username'";
mysqli_query($con,$query);
header("location:view_admin.php?msg=Admin Deleted Successfully");
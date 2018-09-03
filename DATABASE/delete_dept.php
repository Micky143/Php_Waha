<?php
$department=$_REQUEST["dept_name"];
include "connection.php";
$query="delete from department WHERE dept_name='$department'";
mysqli_query($con,$query);
header("location:view_dept.php?msg=Admin Deleted Successfully");
<?php
include "connection.php";

$queryselect="UPDATE 'admin' SET 'password'='$password','email'='$email','fullname'='$fullname','usertype'='$usertype' WHERE username=$username";
mysqli_query($con,$queryselect);
header("location:view_student.php?msg=Admin Updated Successfully");
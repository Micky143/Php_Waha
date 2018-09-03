<?php
$coursename = $_REQUEST["course_name"];
include "connection.php";
$query = "delete from courses WHERE course_name='$coursename'";
mysqli_query($con, $query);
header("location:view_course.php?msg=Admin Deleted Successfully");
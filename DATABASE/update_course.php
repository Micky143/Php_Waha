<?php
$coursename = $_REQUEST["coursename"];
$description = $_REQUEST["description"];
$duration = $_REQUEST["duration"];
$tbdeptname = $_REQUEST["tbdeptname"];

include "connection.php";
$s = "update courses set description='$description',dept_name='$tbdeptname',duration='$duration' WHERE course_name='$coursename'";
mysqli_query($con, $s);
header("location:view_course.php");
echo $s;
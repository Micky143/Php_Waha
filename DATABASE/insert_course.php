<?php
include "admin_header.php";
include "connection.php";
$dept_name = $_REQUEST['tbdeptname'];
$course_name = $_REQUEST['course_name'];
$description = $_REQUEST['description'];
$duration = $_REQUEST["duration"];
$s1 = "select * from courses";
$result = mysqli_query($con, $s1);
$flag = 0;
while ($row = mysqli_fetch_array($result)) {
    if ($row[0] == $course_name) {
        $flag = 1;
        break;
    }
}

if ($flag == 1) {
    echo '<h3 class="text-danger"> Duplicate course Name</h3>';
} else {
    $s2 = "insert into courses values('$course_name','$description','$dept_name','$duration')";

    mysqli_query($con, $s2);
//    echo $s1;
    header("location:view_course.php");
}
?>
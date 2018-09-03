<?php
include "connection.php";
$dept_name = $_POST["dept_name"];
$email_address = $_POST["email_address"];
$contact_no = $_POST["contact_no"];
$ccontact_name = $_POST["contact_person_name"];

$s1 = "select * from department";
$result = mysqli_query($con, $s1);
$flag = 0;
while ($row = mysqli_fetch_array($result)) {
    if ($row[0] == $dept_name) {
        $flag = 1;
        break;
    }
}
if ($flag == 1) {
    echo '<h3 class="text-danger"> Duplicate department name</h3>';
    header("location:add_department.php?msg=Dublicate Dept");

} else {
    $s = "insert into department VALUES ('" . $dept_name . "','" . $email_address . "','" . $contact_no . "',
    '" . $ccontact_name . "')";
    mysqli_query($con, $s);
    header("location:view_dept.php");
}
?>
</body>
</html>
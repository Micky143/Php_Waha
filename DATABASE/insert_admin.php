<?php
include "connection.php";
$username = $_REQUEST["tbusername"];
$password = $_REQUEST["tbpassword"];
$confirmpassword = $_REQUEST["tbconpass"];
$email = $_REQUEST["tbemail"];
$fullname = $_REQUEST["tbfullname"];
$gender = $_REQUEST["rbgender"];
$usertype = $_REQUEST["tbusertype"];

if ($password == $confirmpassword) {
    $s = "insert into admin VALUES ('$username','$password','$fullname','$email','$gender','$usertype')";
    $result = mysqli_query($con, $s);

    if ($result) {
        header("location:add_admin.php?msg=Admin Inserted successfully");
//        echo $s;
    } else {
        header("location:add_admin.php?msg=Admin not added");
//        echo "not added";
    }

} else {
    header("location:add_admin.php?msg=Password and Confirm Password not matched");
//    echo "not matched";
}


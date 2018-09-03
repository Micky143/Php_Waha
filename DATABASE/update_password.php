<?php

$username = $_REQUEST["tbusername"];
$currentpassword = $_REQUEST["tbcurrentpass"];
$newpassword = $_REQUEST["tbnewpass"];
$confirmpassword = $_REQUEST["tbconpass"];
if ($newpassword != $confirmpassword) {
    header("location:change_password.php?msg=New Password and Confirm Password not match");
} else {
    include "connection.php";
    $sql = "Select * from admin";
    $result = mysqli_query($con, $sql);
    $flag = 0;
    while ($row = mysqli_fetch_array($result)) {
        if ($row[0] == $username && $row[1] == $currentpassword) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 0) {
        header("location:change_password.php?msg=Invalid Old Password");
    } else {
        $update = "update admin set password='$newpassword' where username='$username'";
        if (mysqli_query($con, $update)) {
            header("location:change_password.php?msg=Password Change Successfully");
        }
    }
}

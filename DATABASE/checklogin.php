<?php
session_start();

$username = $_REQUEST["tbusername"];
$password = $_REQUEST["tbpassword"];
include "connection.php";
$s = "select * from admin";
$result = mysqli_query($con, $s);
$flag = 0;
while ($row = mysqli_fetch_array($result)) {
    if ($row[0] == $username && $row[1] == $password) {
        $flag = 1;
        break;
    }
}
if ($flag == 1) {
    $_SESSION["username"] = $username;
    header("location:admin_home.php");
} else {
    header("location:admin_login.php?msg=Incorrect Username OR Password");

}

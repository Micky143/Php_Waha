<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location:admin_login.php");
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script src="js/bootstrap.js"></script>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Cashless fee system</a>
            <button type="button" class="navbar-toggle"
                    data-toggle="collapse"
                    data-target="#mymenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
        </div>
        <div class="collapse navbar-collapse" id="mymenu">
            <ul class="nav navbar-nav">

<!--                <li class="active"><a href="admin_home.php">Home</a></li>-->
<!--                <li class="active"><a href="add_admin.php">ADD ADMIN</a></li>-->
<!--                <li class="active"><a href="change_password.php">Change Password</a></li>-->
<!--                <li class="active"><a href="admin_home.php">Home</a></li>-->

                <li>
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown">Manage Co Admin
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="add_admin.php">Add Admin</a></li>
                        <li><a href="view_admin.php">View Admin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown">Manage Department
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="add_department.php">Add Department</a></li>
                        <li><a href="view_dept.php">View Department</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown">Manage Course
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="add_course.php">Add Course</a></li>
                        <li><a href="view_course.php">View Courses</a></li>
                    </ul>
                </li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>

    </nav>

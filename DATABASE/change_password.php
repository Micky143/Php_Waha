<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
include "connection.php";
include "admin_header.php";
$username = $_SESSION["username"];
$select = "select * from admin WHERE username='$username'";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_array($result);
?>
<div class="container-fluid">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Change Password</h1>
        <form action="update_password.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="tbusername" readonly required class="form-control"
                       data-rule-required="true" value="<?php echo $row[0]; ?>">
            </div>
            <div class="form-group">
                <label>Current Password</label>
                <input type="password" name="tbcurrentpass" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="tbnewpass" required class="form-control"
                       data-rule-required="true">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="tbconpass" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group text-center">
                <input type="submit" value="change password" class="btn btn-primary">
            </div>
        </form>
        <?php
        if (isset($_REQUEST["msg"])) {
            echo $_REQUEST["msg"];
        }
        ?>

    </div>
</div>
</body>
</html>
<?php


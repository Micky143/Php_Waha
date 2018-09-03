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

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Admin Login</h1>
        <form action="checklogin.php" method="post" >
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="tbusername" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="tbpassword" class="form-control" required>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="Login" class="btn btn-primary">
                <?php
                if(isset($_REQUEST["msg"]))
                {
                    echo $_REQUEST["msg"];
                }
                ?>
            </div>
        </form>




    </div>

</body>
</html>



<?php
/**
 * Created by PhpStorm.
 * User: Nikhil Sharma
 * Date: 7/7/2017
 * Time: 3:45 PM
 */
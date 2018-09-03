<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="external/jquery/jquery.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("form").validate();
        })
    </script>
</head>
<body>
<?php
include "admin_header.php";
?>
<div class="container-fluid">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Add Admin</h1>
        <form action="insert_admin.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="tbusername" required class="form-control"
                data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="tbpassword" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="tbconpass" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="tbemail" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="tbfullname" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="radio" name="rbgender" value="Male" checked>Male

                <input type="radio" name="rbgender" value="Female">Female
            </div>
            <div class="form-group">
                <label>User Type</label>
                <select name="tbusertype" class="form-control" required>
                    <option>Select Type</option>
                    <option>Admin</option>
                    <option>Power User</option>
                </select>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </form>
        <?php
        if (isset($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </div>
    <div>
</body>
</html>


<?php

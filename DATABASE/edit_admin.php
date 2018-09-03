<?php
$username = $_REQUEST["username"];
include "connection.php";
$s = "select * from admin WHERE username='$username'";
$result = mysqli_query($con, $s);
$row = mysqli_fetch_array($result);
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

</head>
<body>
<?php
include "admin_header.php";
?>
<div class="container-fluid">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Update Admin</h1>
        <form action="update_admin.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="tbusername" value="<?php echo $row[0]; ?>" class="form-control"
                       data-rule-required="true" required readonly>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="tbpassword" value="<?php echo $row[1]; ?>" class="form-control"
                       data-rule-required="true" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="tbconpass" value="<?php echo $row[1]; ?>" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="tbemail" value="<?php echo $row[2]; ?>" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="tbfullname" value="<?php echo $row[3]; ?>" required class="form-control"
                       data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Gender</label>
<!--                <input type="radio" name="rbgender" value="Male" --><?php
//                if ($row[4] == 'Male') {
//                    echo 'checked';
//                }; ?><!-->
<!---->
<!--                <input type="radio" name="rbgender" value="Female" --><?php
//                if ($row[4] == 'Female') {
//                    echo 'checked';
//                }; ?><!-->

                 <input type="radio" name="rbgender" value="Male" <?php echo ($row[4] == "Male") ? 'checked' : '' ?>  >Male
                <input type="radio" name="rbgender" value="Female" <?php echo ($row[4] == "Female") ? 'checked' : '' ?>  >Female

            </div>
            <div class="form-group">
                <label>User Type</label>
                <select name="tbusertype" class="form-control" required>
                    <option>Select Type</option>
                    <option>Admin<?php if ($row[5] == 'admin') {
                            echo 'selected';
                        }; ?></option>
                    <option>Power User<?php if ($row[5] == 'power user') {
                            echo 'selected';
                        }; ?></option>
                </select>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="update" class="btn btn-primary">
            </div>
        </form>

    </div>
    <div>
</body>
</html>



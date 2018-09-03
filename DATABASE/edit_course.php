<?php
$coursename = $_REQUEST["course_name"];
include "connection.php";
$s = "select * from courses WHERE course_name='$coursename'";
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
        <h1 class="text-center">Update department</h1>
        <form action="update_course.php" method="post">
            <div class="form-group">
                <label>course name</label>
                <input type="text" name="coursename" value="<?php echo $row[0]; ?>" class="form-control"
                       data-rule-required="true" required readonly>
            </div>
            <div class="form-group">
                <label>description</label>
                <input type="text" name="description" required class="form-control" value="<?php echo $row[1]; ?>"
                data-rule-required="true" required>
            </div>
            <div class="form-group">
                <label>Duration</label>
                <input type="number" name="duration" value="<?php echo $row[3]; ?>"  class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Department</label>
                <select name="tbdeptname" class="form-control">
                    <option>choose one</option>
                    <?php
                    include "connection.php";
                    $sqlselect = "select dept_name from department";
                    $result = mysqli_query($con, $sqlselect);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="update" class="btn btn-primary">
                <?php
                if (isset($_REQUEST["msg"])) {
                    echo $_REQUEST['msg'];
                }
                ?>
            </div>
        </form>

    </div>
    <div>
</body>
</html>



<!doctype html>
<html lang="en">
<head>

    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="external/jquery/jquery.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("form").validate();
        })
    </script>
    <title>view course</title>
</head>
<body>
<?php
include "admin_header.php";
?>
<div class="container">
    <div class="col-md col-md-offset-3"></div>
    <h1>Add course</h1>

    <form action="insert_course.php" id="form1" method="post">
        <div class="form-group">
            <label>department name:</label>
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
            Enter description:
            <input type="text" data-rule-required="true" data-msg-required="Please enter description of Course"
                   class="form-control" name="description">
        </div>
        <div class="form-group">
            Enter course name:
            <input type="text" class="form-control" data-rule-required="true"
                   data-msg-required="please enter course name" name="course_name">
        </div>
        <div class="form-group">
            Enter Duration:
            <input type="number" class="form-control" data-rule-required="true"
                   data-msg-required="please enter duration" name="duration">
        </div>
        <div class="form-group">
            <input type="submit" value="submit" class="btn btn-success">
        </div>
    </form>
</body>
</html>
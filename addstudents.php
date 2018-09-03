<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscript.js"></script>

</head>
<body>

<div class="container">

    <div class="col-md-6 col-md-offset-3">


        <form action="" method="post">
            <div class="form-group">
                <label>Department Name</label>
                <select name="tbdname" required class="form-control" onchange="showCOURSE(this.value)">
                    <option>Choose One</option>
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
                <label>Course Name</label>
                <select id="course" name="course" class="form-control" required onchange="showsemester(this.value)">
                    <option>Choose One</option>
                </select>
            </div>
            <div class="form-group">

                <select name="sem" id="sem" class="form-control" required >

                </select>
            </div>
            <div class="form-group">
                <label>no of students</label>
                <input type="text" name="tbsno" id="tbsno">
            </div>

            <div class="form-group">
                <input type="submit" value="Go" class="btn btn-primary">
                <?php

                if (isset($_REQUEST["msg"])) {
                    echo $_REQUEST['msg'];
                }
                ?>
            </div>

        </form>

    </div>

</div>

</body>
</html>

<?php

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href ="css/bootstrap.css" rel="stylesheet">

</head>
<body>
<?php
include "admin_header.php";
?>
<div class="container">
    <h1 class="text-center text-danger">view course</h1>
    <table class="table table-bordered table-hover">
    <th>sr no</th>
    <th>COURSE NAME</th>
    <th>DISCRIPTION</th>
    <th>DEPARTMENT NAME</th>
    <th>Duration</th>

    <th colspan="2">controls</th>
    <?php

    include "connection.php";
    $sr_no=1;
    $sqlselect="select * from courses";
    $result=mysqli_query($con,$sqlselect);

    while ($row = mysqli_fetch_array($result)) {
        echo"<tr>";
        echo"<td>$sr_no</td>";
        echo"<td>$row[0]</td>";
        echo"<td>$row[1]</td>";
        echo"<td>$row[2]</td>";
        echo"<td>$row[3]</td>";

        echo "<td><a href='edit_course.php?course_name=$row[0]'> Edit</a></td>";
         echo"<td><a href='delete_course.php?course_name=$row[0]'> delete </a></td>";
        echo"</tr>";
        $sr_no++;
    }
    ?>
</table>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title> VIEW Department </title>
    <link href="css/bootstrap.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <?php

    include "admin_header.php";
    include "connection.php";
    $s = "select * from department ORDER BY dept_name";
    $result = mysqli_query($con, $s);
    $s = '<table class="table table-bordered">';
    $i = 0;
    $s .= "<tr><th>Sr No</th>
<th>DEPARTMENT NAME</th>
<th> EMAIL ADDRESS</th>
<th> CONTACT NUMBER</th>
<th> CONTACT PERSON NAME</th>
<th> DELETE</th>
<th> EDIT</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {

        $s = $s . "<tr>";
        $s = $s . "<td>" . $i . "</td>";
        $s = $s . "<td>" . $row[0] . "</td>";
        $s = $s . "<td>" . $row[1] . "</td>";
        $s = $s . "<td>" . $row[2] . "</td>";
        $s = $s . "<td>" . $row[3] . "</td>";
        $s = $s . "<td><a href='delete_department.php?dept_name=" . $row[0] . "'> <img style='width:45px ; height:45px ;' src='delete.png'> </a></td>";
        $s = $s . "<td><a href='edit_department.php?dept_name=" . $row[0] . "'> <img style='width:45px ; height:45px ;' src='edit.png'> </a></td>";
        $s = $s . "<tr>";

        $i++;
    }
    $s = $s . "</table>";
    echo $s;
    ?>
</div>

</body>
</html>
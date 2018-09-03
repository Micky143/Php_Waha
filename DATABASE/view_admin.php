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
<div class="container">
    <h1 class="text-center">View Admin</h1>
    <table class="table table-bordered table-hower">
        <tr>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Usertype</th>
            <th colspan="2">Controls</th>
        </tr>
        <?php
        include "connection.php";
        $query = "SELECT * FROM `admin`";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td><a href='edit_admin.php?username=$row[0]'>Edit</a></td>";
            echo "<td><a href='delete_admin.php?username=$row[0]'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>


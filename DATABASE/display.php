<html>
<head>
<title>Result</title>
</head>
<body bgcolor="#EEFDEF">
<?php
$con = mysqli_connect("localhost","root","","db1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo "<table border='1'>
<tr>
<th>Id</th>
<th>email</th>
<th>password</th>
</tr>";

$sql="select * from users";
$result=mysqli_query($con,$sql); 

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['users_id'] . "</td>";
  echo "<td>" . $row['users_email'] . "</td>";
  echo "<td>" . $row['users_pass'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
 
mysqli_close($con);
?>
</body>
</html>
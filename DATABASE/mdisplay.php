<?php
include('connectivity.php');
$un="%";
$un.=$_POST["username"];
$un.="%";
$sql="select * from users where username like '$un'";
$result=mysqli_query($con,$sql); 
echo "<table border='2' bgcolor='yellow'>
<tr>
<th>UserId</th>
<th>UserName</th>
<th>UserPassword</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['userid'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['userpassword'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
 
echo "<br><br><h3><a href='main.html'>Operation Menu</a></h3>";
mysqli_close($con);
?>
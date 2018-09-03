<?php
include('connectivity.php');
$sql = "select userid,username,userpassword from users;"; 
$result = mysqli_query($con,$sql);
while ($result)
{
$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row['userid'] . " " . $row['username']." ".$row['userpassword']."<br>";
}
mysqli_close($con);
?>
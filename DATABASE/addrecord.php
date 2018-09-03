<?php
// Create connection
$con=mysqli_connect("127.0.0.1","root","","app");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "select userid,username,userpassword from users;"; 
//$result = mysqli_query($con,$sql);
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
else
{
$result = mysqli_query($con,$sql);
$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row['userid'] . " " . $row['username']." ".$row['userpassword']."<br>";
}
mysqli_close($con);
?>
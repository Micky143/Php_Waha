<?php
// Grab User submitted information
$username= $_POST["username"];
$userpassword = $_POST["userpassword"];
// Connect to the database
$con1=mysqli_connect("localhost","root","","app");
// Make sure we connected succesfully
if(!$con1)
{
    die('Connection Failed'.mysqli_error($con1));
}
//Fetching user record from database
$result=mysqli_query($con1,"select username, userpassword 
from users where username='$username'");
//checking if record selected
if($result === FALSE) { 
// TODO: better error handling
die('no record fetched'.mysql_error());
}
$row = mysqli_fetch_array($result);

if($row['username']==$username && $row['userpassword']==$userpassword)
{
sleep(3);
header("Location:addrecord.php");               //redirect to given page
}
else
{
sleep(2);
header("Location:login.php");               //redirect to given page
exit();
}
 mysqli_close($con1);
?>
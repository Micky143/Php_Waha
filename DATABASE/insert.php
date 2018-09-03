<?php
// Create connection
$con=mysqli_connect("localhost","root","","app");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$user=$_POST["username"];
$pass=$_POST["userpassword"];
$sql="insert into users (username, userpassword) VALUES ('$user', '$pass')";

if (mysqli_query($con, $sql)) 
{ 
    echo "New record created successfully";
} 
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
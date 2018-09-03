<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(mysqli_query($con,"DELETE FROM Persons WHERE FirstName='$_POST[firstname]'"))
{
echo "record deleted successfully";
}
else
{
echo "no record found";
}
mysqli_close($con);
?>
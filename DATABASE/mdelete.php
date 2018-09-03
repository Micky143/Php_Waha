<?php
include('connectivity.php');
$un="%";
$un.=$_POST["username"];
$un.="%";
$sql="DELETE FROM users WHERE username like '$un'";
if(mysqli_query($con,$sql))
{
if(mysqli_affected_rows($con))
{
echo "<p>Successfully Deleted <b> ". mysqli_affected_rows($con) . "</b> Record(s).</p>";
}
else
{
echo "No Record Deleted, <b> ". mysqli_affected_rows($con) . "</b> Row(s) Affected.</p>";
}
}
else
{
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

echo "<br><br><h3><a href='main.html'>Operation Menu</a></h3>";
mysqli_close($con);
?>
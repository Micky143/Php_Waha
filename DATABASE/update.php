<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
include('connectivity.php');
$username=$_POST["username"];
$pass=$_POST["userpassword"];
$pass=password_hash($pass, CRYPT_BLOWFISH);
$sql="update users set userpassword='$pass' WHERE username='$username'";
if(mysqli_query($con,$sql))
{
if(mysqli_affected_rows($con))
{
echo "<p>Successfully updated<b> ". mysqli_affected_rows($con) . "</b> record(s).</p>";
}
else
{
echo mysqli_affected_rows($con)." Record(s) updated";
}
}
else
{
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
echo "<br><br><h3><a href='main.html'>Operation Menu</a></h3>";
mysqli_close($con);
}
else
{
echo "<h1>you are not allowed to perform this operation(s) as you are not logged in<h1>";
echo "<a href='index.html'>Log-In</a>";
}
?>
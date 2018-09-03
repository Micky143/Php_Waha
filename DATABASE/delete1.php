<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
echo"
<html>
<body>
<form action='delete.php' method='post'>
Username: <input type='text' name='username'><br>
<input type='submit' value='Delete'>
</form>
</body>
</html>";
}
else
{
echo "<h1>you are not allowed to perform this operation(s) as you are not logged in<h1>";
echo "<a href='index.html'>Log-In</a>";
}
?>
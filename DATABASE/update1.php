<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
echo"<html>
<body>
<form action='update.php' method='post'>
<pre>
UserName:	<input type='text' name='username'></br>
New Password:	<input type='password' name='userpassword'></br>
<input type='submit' value='Update'>
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
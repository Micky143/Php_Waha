<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true)
{
echo "<html>
<head><style>
a{font-weight:bold;text-decoration:none;color:white;}
a:hover{font-size:30px;color:#E8B5BC;}
body{background-image:url(17.jpg);}
</style></head>
<body style='text-align:center;'>
<div class='a' style='height:300px;width:700px; background-color:#A177E1;
padding-top:100px ;border:10px ridge gray;margin:100px 0px 0px 310px;'>
<p style='font:bold 19px Cambria;'>Please select one option to perform :</p><br>
<a href='insert1.php'>Insert</a><br>
<a href='delete1.php'>Delete</a><br>
<a href='update1.php'>Update</a><br>
<a href='display.php'>Display</a><br>
<form action='logout.php'>
<button style='margin:30px;'>LOG OUT</button>
</form>
</body>
</html>";
}
else{
   header("Location:login.php");
}
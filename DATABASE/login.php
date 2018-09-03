<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login Form</title>
</head>
<body>
<form method="post" action="validate_login.php" name="contactForm">
        <table border="1" >
		    <tr>
                <td><label for="username">User Name</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="userpassword">Password</label></td>
                <td><input type="password" name="userpassword" id="userpassword"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
</body>
</html>
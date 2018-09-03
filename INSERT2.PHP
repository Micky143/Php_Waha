<?php
//CONNECTING TO MYSQL SERVER AND CREATING A DATABASE
$con=mysqli_connect("127.0.0.1","root","");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


// Creating database
$sql="CREATE DATABASE my_db";
if (mysqli_query($con,$sql))
{
echo "Database my_db created successfully<BR>";
}
else
{
echo "Error creating database: " . mysqli_error($con);
}
mysqli_close($con);


//REOPENING CONNECTION WITH DATABASE IN USE
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




// Creating table
$sql = "CREATE TABLE Persons(PID INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(PID),
FirstName VARCHAR(15),LastName VARCHAR(15),Age INT)";

if (mysqli_query($con,$sql))   // Executing Table creation query
{
echo "Table persons created successfully<BR>";
}
else
{
echo "Error creating table: " . mysqli_error($con);
}


//INSERTION  OF NEW RECORDS
IF(mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin',35)"))
{
echo "RECORD ADDED successfully<BR>";
}
else
{
echo "Error RECORD NOT INSERTED: " . mysqli_error($con);
}


//Connection Closing
if(mysqli_close($con))
{
echo "Connection Closed Successfully<BR>";
}
else
{
echo "Connection not Closed: " . mysqli_error($con);
}

?>
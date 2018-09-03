<?php
include('connectivity.php');
$rtable=$_POST["table"];
$sql="select * from $rtable ";
$result=mysqli_query($con,$sql); 
$num=mysqli_num_fields($result);
echo "<h1><font style='background-color:red'>Displaying  ".$rtable." Table</font></h1>";
echo "<table border='2' bgcolor='yellow'>";
echo "<tr>";
for($i=0;$i<$num;$i++)
{
$column=mysqli_fetch_field_direct($result,$i);
echo "<th>$column->name</th>";
}
while($row = mysqli_fetch_array($result,MYSQL_NUM))
{
echo "<tr>";
for($i=0;$i<$num;$i++)
echo "<td>" . $row[$i] . "</td>"; 
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
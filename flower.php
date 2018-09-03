<?php
$flowers=array('lotus'=>3,'Rose'=>5,'Lilly'=>10,'Sunflower'=>4);
echo"<table border='3' bgcolor='red'>";
echo"<tr> <th>Flowername</th><th>Price</th></tr>";
foreach($flowers as $flower=>$price)
{
echo"<tr><td>$flower</td><td>$price</td></tr>";
}
echo"</table><br><br>";
echo"<font color='red'><b>price of rose is $flowers[Rose]</b></font><br>";
echo"<font color='green'><b>price of Lilly is $flowers[Lilly]</b></font><br>";
?>
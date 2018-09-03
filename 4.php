<?php
$names=array('Aman'=>'Verma',
             'Ruhi'=>'Thakur',
			 'Manpreet'=>'Singh',
			 'Vikas'=>'Malhotra');
echo "First name are following:<br>";
foreach($names as $fname=>$lname)
{
	echo "$fname<br>";
}			 
echo"<br>All last names are following<br>";	
foreach($names as $value)
{
	echo "$value<br>";
}
?>


<?php
$arr1=Range(5,15);
$arr2=Range(50,60);
$sum=0;
$arr3=array_merge($arr1,$arr2);
foreach($arr3 as $value)
{
	echo "$value<br>";
    $sum=$sum+$value;
}
echo "The sum of all values :$sum";
?>
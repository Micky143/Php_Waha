<?php
$num=971; 
while($num>9)
{
	$nnum=0;
	while($num>1)
	{    
		$r=$num%10;
		$nnum+=$r;
		$num=$num/10;
	}
	$num=$r;
}	
if($num==1)
	echo "number is magic number $num" ;
else
	echo "number is not a magic number $num";
?>
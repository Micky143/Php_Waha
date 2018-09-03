<?php
for($i=3;$i<=100;$i++)
{
	$divisor=2;
	$half=$i/2;
	for($j=2;$j<=$half;$j++)
	{
		if($i%$j==0)
		$divisor++;
	}
if($divisor==2)
echo"<h1>$i Number is Prime<h1>";
else
echo"<h1>$i has $divisor divisors<h1>";
}
?>
<?php
$str =<<<eos
<font color="purpule"><h1>Sir Humphrey Davy<br>
Abominated gravy.<br>
He lived in the odium<br>
of havind discovered sodium.<br><h1></font>
eos;
echo $str;


$string='Hello';
$len=strlen($string);
for($i=0;$i<$len;$i++)
{
	printf("The %dth character is %s<br>",$i+1, $string[$i]);
}


$string='Hello';
$len=strlen($string);
for($i=0;$i<$len;$i++)
{
	printf("The $i th character is $string[$i]<br>");
}


$str=' Hello World     ';
$str=trim($str);
$str1=rtrim($str);
$str2=ltrim($str);
echo "<br>",$str;
echo "<br>",$str1;
echo "<br>",$str2;



$str='      Hello World     ';
$str1=rtrim($str);
echo "<br><br>",$str1;


?>







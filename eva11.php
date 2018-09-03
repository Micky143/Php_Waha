<!-- Break the string into word and count the numbers of words in string -->

<?php
$str='Hello world hello';

$arr=explode(' ', $str);
foreach($arr as $value)
{
	echo "<br>$value ";
}
echo str_word_count($str);

?>



<?php
$string="whole world is wonderful wiffy";
$len=strlen($string);
$count=0;
for($i=0;$i<$len;$i++)
{
	if($string[$i]='w' | $string[$i]='W')
		$count++;
}
echo "<br>number of words=".$count;	
?>


<!--$str='Hello world hello';
$len=strlen($str);
$count=0;
for($i=0;$i<$len;$i++)
{
	if($string[$i]='w' or $string[$i]='W')
		$count++;
}
echo "<br>number of words=".$count;	
-->
 
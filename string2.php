<?php  
$pre="George W. Bush;William Clinton;George H.W.Bush;Ronald Reagan;Jimmy Carter";
$pre=strtok($pre,",;");
//foreach($pre as $pre)
while($pre!=null)
{
	echo"$pre<br>";
	$pre=strtok(";");
}
?>



<?php 
$str="Hello world how are you";
$arr=explode(" ",$str);
foreach($arr as $value)
echo "value<br>";
?>
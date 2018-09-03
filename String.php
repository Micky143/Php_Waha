<?php
$str="hello world";
echo strrev($str);
echo "<br>", str_repeat($str,3),"<br>";
echo "<br>",str_pad($str,20,'*');   //echo "<br>",str_pad($str,20,'*',STR_PAD_RIGHT);by default
echo "<br>",str_pad($str,20,'*',STR_PAD_BOTH),"<br>";
echo "<br>",str_pad($str,20,'*',STR_PAD_LEFT);


$str1="I am studying in MCA";
$arr=explode(' ', $str1);
foreach($arr as $value)
{
	echo "<br>$value ";
}
   
   
   //                              <-- String decomposing Function  -->

$str1="I*am*studying*in MCA";
$arr=explode('*', $str1);
$str2=implode(' ', $arr);
foreach($arr as $value)
{
	echo "<br>$value ";
}
echo "<br>",$str2;


//                              <-- String Searching Function  -->

$str="hello mca how are you MCA?";
$str1="MCA";
echo "<br><br>",strpos($str,$str1);
echo "<br><br>",strrpos($str,$str1);

$str="Hello mca how are you MCA guys ";
$str1="MCA";
echo "<br><br>",strstr($str,$str1);
echo "<br><br>",stristr($str,$str1);    //  i--  ignore case
echo "<br><br>",strchr($str,$str1);      // simillar to strstr
echo "<br><br>",strrchr($str,$str1);     

?>

<?php
$str2="Hello world Hello different world people";
$str1="world";
//echo "<br>",str_replace('world','MCA',$str2);
echo "<br>",substr($str2,17,9);
echo "<br>",substr_replace($str2,"new",12,5);
echo "<br>",str_replace('world','MCA',$str2);
			   
				   
?>
<?php
$names=array('aman','ankit','azhar','ankur','abhinas','akhil');
array_push($names,'arun');
array_push($names,'amit');
print_r($names);
echo "<br><br><br>";
array_pop($names);
print_r($names);
?>

<?php
$arr1=array(5,15,25,35,45,55);
$arr2=array(5,10,20,25,30,35);
echo "<br><br>";
print_r (array_Intersect($arr1,$arr2));
$res1=array_diff($arr1,$arr2);
$res2=array_diff($arr2,$arr1);
$res3=array_merge($res1,$res2);
echo "<br><br>";
print_r( $res1);echo "<br><br>";
print_r( $res2);echo "<br><br>";
print_r( $res3);
?>


<?php
$arr1=array(5,15,25,35,45,55);
$arr2=array(5,10,20,25,30,35);
$arr1=array_Intersect($arr1,$arr2);
foreach($arr1 as $arr1){
echo "<br>",$arr1;
}
?>


<?php
$arr1=array(5,15,25,35,45,55);
$sum=0;
foreach($arr1 as $value)
{
	$sum=$sum+$value;
}
echo "<br><br>sum of array ",$sum,"<br>";
$arr2=array_shift($arr1);
print_r($arr1);
$arr2=array_reverse($arr1);
echo "<br><br>";
print_r($arr2);
echo "<br><br>";
//$arr3=array_reduce();
?>
<?php
$arr=array('aman','ankit','arun','brun');
unset($arr[2]);
foreach($arr as $name)
echo "$name<br>";
echo "<br><br>";
?>
<?php
$arr=array('aman','ankit','arun','brun');
$arr2=array_slice($arr,2,2);
echo "<br><br>original array<br>";
foreach($arr as $names)
{echo "$names<br>";}echo "<br>";
echo "Element from array<br>";
foreach($arr2 as $name)
{echo "$name<br>";}
echo "<br><br>";
?>

<?php
$arr=array('aman','ankit','arun','brun');
echo "number of element=".count($arr),"<br>";
$arr2=array_splice($arr,1,2);
foreach($arr2 as $name)
{echo "$name<br>";}
echo "<br><br>original array<br>";
foreach($arr as $names)
{echo "$names<br>";}
?>

<?php
$arr=array("aman","ankit","arun","brun");
echo "<br>number of element=".count($arr),"<br>";
$conf=array(10=>"ten",11=>"eleven",12=>"twelve");
$size=count($conf);
echo $size;
?>





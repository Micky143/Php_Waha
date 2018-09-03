<?php
$arr1=array(10,20,28);
$arr2=array(15,21,24,27,30);
$arr3=array_merge($arr1,$arr2);
sort($arr3);echo "All the element array1 and array2 are merged and sorted";
foreach($arr3 as $value)
echo "$value <br>";
?>
<?php
$arr1=array(5,6,9,3);
$arr2=array(2,5,7,1);
$arr=array_diff($arr1,$arr2);
$arr4=array_diff($arr2,$arr1);
$arr5=array_merge($arr,$arr4);
print_r($arr5);
?>
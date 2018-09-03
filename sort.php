<?php
$arr=array('aman'=>'sharma','ankit'=>'sabrwal','rohit'=>'puniya','ajay'=>'kumar','abhinav'=>'gupta');
asort($arr);
print_r($arr);
?>

<?php
$arr=array('aman'=>'sharma','ankit'=>'sabrwal','rohit'=>'puniya','ajay'=>'kumar','abhinav'=>'gupta');
arsort($arr);
echo "<br><br>";
print_r($arr);
?>

<?php
$arr=array('aman'=>'sharma','ankit'=>'sabrwal','rohit'=>'puniya','ajay'=>'kumar','abhinav'=>'gupta');
ksort($arr);
echo "<br><br>";
print_r($arr);
?>

<?php
$arr=array('aman'=>'sharma','ankit'=>'sabrwal','rohit'=>'puniya','ajay'=>'kumar','abhinav'=>'gupta');
krsort($arr);
echo "<br><br>";
print_r($arr);
?>
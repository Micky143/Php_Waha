<html>
<head><title>hello</title>
<body>
<?php
$str="hello world";
$str1='HELLO WORLD';
$str2='hello world';
$str3='hello world';
$str=strtoupper($str);
$str1=strtolower($str1);
$str2=ucfirst($str2);
$str3=ucwords($str3);
echo "<br>",$str;
echo "<br>",$str1;
echo "<br>",$str2;
echo "<br>",$str3;



$str="hello world";
strtoupper($str);
$str=ucfirst($str);
echo "<br>",$str;

$str="HelLo world";
$str1="HelLo world";
$str=strcmp($str,$str1);
$str4=strncmp($str,$str1,2);
$str1=strcasecmp($str,$str1);
$str2=strncasecmp($str,$str1,4);
echo "<br><br>",$str;
echo "<br>",$str1;
echo "<br>",$str2;
echo "<br>",$str4;

?>

</body>
</head>
</html>
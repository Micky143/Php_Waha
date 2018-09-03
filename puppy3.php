<?php
require('puppy.php');
class poddle extends dog
{
var $dogtype;
function type($height)
{
if($height<10)
$dogtype='toy';
else
if($height<15)
$dogtype='Standard';
else
$dogtype='miniature';	
}
function bark()
{
	echo "\tyip";
}
}
$pup1=new dog();
$pup1->bark();
$pup2=new poddle();
$pup2->type(14);
$pup2->setdogname('Tommy');
$pup2->type(13);
echo "{$pup2->dogtype} \tsays";
$pup2->bark();
?>
<?php
require('puppy.php');
class poddle extends dog
{
var $dogtype;
function type($height)
{
if($height<10)
$this->type='toy';
elseif($height<15)
$this->type='Standard';
else
$this->type='miniature';	
}
function bark()
{
	echo "\t yip";
}
}
$pup2=new poddle();
$pup2->type(14);
$pup2->setdogname('Tommy');
echo $pup2->getdogname();
echo "\t of type $pup2->type says";
$pup2->bark();
?>
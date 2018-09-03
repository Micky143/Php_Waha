<?php
class dog
{
var $name;
function bark()
{
echo "woof";
}

function setdogname1($n1)
{
echo $this->name=$n1;
}
}
$pup1=new dog();
$pup2=new dog();
$pup1->setdogname1('Rover');
//$pup2->setdogname('Timmy');
echo "\tSays\t";
$pup1->bark();
?>



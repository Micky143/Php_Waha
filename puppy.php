<?php
class dog
{
private $name;
function bark()
{
echo "woof";
}
function setdogname($n1)
{
$this->name=$n1;
}
function getdogname()
{
echo "$this->name";
}
}
$pup1=new dog();
$pup2=new dog();
$pup1->setdogname('Rover');
$pup2->setdogname('Timmy');
$pup1->getdogname();
echo "\tSays\t";
$pup1->bark();
?>



<?php
class dog
{
var $name;
function bark()
{
echo $this->name.'says woof!';
}
}
$puppy=new dog();
$puppy->name='rover';
$puppy->bark();	
?>	
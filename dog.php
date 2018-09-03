<?php
class dog
{
	var $name;
	function bark()
	{
		echo 'woof';
	}
}
$puppy=new dog();
$puppy->name='Rover';
echo "{$puppy->name}says";
$puppy->bark();
?>
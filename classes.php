<?php
require('dog1.php');
$puppy=new dog1();
$puppy->name='Rover';
echo "{$puppy->name}says";
$puppy->bark();
?>
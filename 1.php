<?php
$name = 'Phil';
$age  = 23;
echo "$name is $age<br>";
//  Phil is 23 


$name = 'Phil';
$age  = 23;
echo '$name is $age';
// $name is $age 
?>

<?php
echo '<br>Hello World!<br />';
echo('Hello World!<br />');
print 'Hello World!<br />';
print('Hello World!<br />');
?>

<?php
define('NAME','Phil');
define('AGE',23);
echo NAME;
echo ' is ';
echo AGE;
// Phil is 23 
?>

<?php
$i = 1;
while ($i <= 10) 
{echo $i++; 
} 
?>


<?php
$i = 1;
do
{echo ++$i; 
} while ($i <= 10) ;
?>


<?php
$letters = array('a','b','c');
	foreach ($letters as $value) { echo $value; 
	}
?>
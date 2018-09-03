<!-- Array and array functions -->

<?php
$fruit_basket=array('red'=>'apple', 'orange'=>'orange',
                    'yellow'=>'banana', 'green'=>'pear');
					echo "yellow color fruit is $fruit_basket[yellow]<br>";
					echo "yellow color fruit is ".$fruit_basket['yellow'];
					
					
 //              Array list 
$fruit_basket=array('apple', 'orange','banana', 'pear'); 
list($red_array,$orange_array)=$fruit_basket;
echo "<br>",$red_array;


$cornucopia=array('fruit'=>array('red'=>'apple','orange'=>'orange',
                                 'yellow'=>'banana','green'=>'pear'),
								 'flower'=>array('red'=>'rose',
								 'yellow'=>'sunflower','purple'=>'iris'));
$kind_wanted='flower';								 
$color_wanted='purple';
print("<br>The $color_wanted $kind_wanted is {$cornucopia[$kind_wanted][$color_wanted]}");								 
 
 
 
?>
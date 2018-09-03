<?php
$name=array('aman'=>'kataria',
            'Vijay'=>'Goyal',
			'Ankur'=>'verma',
			'Rohit'=>'sethi');
			foreach($name as $fname=>$lname);
			echo $fname.' '.$lname."<br>";
     		$name=array_flip($name);
			foreach($name as $fname=>$lname);		
			echo $fname.' '.$lname."<br><br>";
?>


<?php
$numbers=Range(20,30);
foreach($numbers as $index=>$value)
echo $value ." Stored at ". ($index+1 )." location<br>";
?>
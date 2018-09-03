<?php
$name[0]="Peter";
$name[1]="Quagmire";
$name[2]="joe";
echo $name[1]. "\tand\t" .$name[2]. "are\t" .$name[0]." 's neighbors<br> " ;



$ages=array("Brent"=>42, "Andrew"=>25, "Joshua"=>16);
$ages['Brent']="42";
$ages['Andrew']="25";
$ages['Joshua']="16";
echo "Brent is ".$ages['Brent']." years old.<br>";
echo "Brent is ".$ages['Joshua']." years old.<br><br>";
//echo $ages['Brent'];

?>

<?php
$families=array("Griffin0"=>array("Peter",
"Lois", "Megan"),
"Quagmire"=>array ("Glenn"),
"Brown"=>array("Cleveland","Loretta","Junior"));
echo $families['Brown'][2]. " is a part of the Brown family";
?>
?>
<?php
class student
{
	var $name;
	var $rollno;
	var $gender;
function studentdetail($n,$r,$g)
{	
    $this->name=$n;
    $this->rollno=$r;
    $this->gender=$g;
}
function studentdisplay()
{
	echo "student Name=$this->name<br>";
	echo "student Roll no=$this->rollno<br>";
	echo "student Gender=$this->gender<br>";
}
}
$stud1=new student();
$stud2=new student();
$stud1->studentdetail("Akash",123,"M");
$stud2->studentdetail("Akansha",124,"F");
$stud2->studentdisplay();
?>
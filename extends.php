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
class MCAstudent extends student
{
	var $expertise_level;
	function programming_courses_studied($num)
	{
		if($num<=5)
		{
			$this->expertise_level="Beginner";
		}
		elseif($num<=15)
		{
			$this->expertise_level="Intermediate";
		}
		else
		{
			$this->expertise_level="Expert";
		}
	}
	function studentdisplay()
	{
	parent::studentdisplay();
	echo "Student Expertise=$this->expertise_level<br>";
	}
}
$stud1=new MCAstudent();
$stud2=new student();
$stud1->studentdetail("Akash",123,"M");
$stud1->programming_courses_studied(16);
$stud2->studentdetail("Akansha",124,"F");
$stud1->studentdisplay();
echo "<br><br>";
$stud2->studentdisplay();
?>
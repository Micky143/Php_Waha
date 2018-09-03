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
class MCA extends MCAstudent
{
	var $specialisation;
	function specialisation_course_studied($spe)
	{
		if($spe=1)
		{
			//$this->specialisation="PHP";
		    echo "PHP";
		}
		else
		{
		    echo "HTML";
         	//$this->specialisation="HTML";
		}
	}
}
$stud1=new MCAstudent();
$stud2=new student();
$stud3=new MCA();
$stud1->studentdetail("Akash",123,"M");
$stud1->programming_courses_studied(16);
$stud2->studentdetail("Akansha",124,"F");
$stud1->studentdisplay();
$stud3->specialisation_course_studied(1);
//$stud3->specialisation_course_studied(2);
echo "<br><br>";
$stud2->studentdisplay();
?>
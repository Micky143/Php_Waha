<?php
 class MyClass{
var $n;
      function MyMethod1(){
        echo $this->n."Hello World"; 
	  }
		function MyMethod2()
	  
	  {
        $this->MyMethod1();
		echo "hello";
      }
 }
$obj= new MyClass();
      $obj->MyMethod2();
	  
	  
	  
/*	class Test
{private $var;
    public function func()
    {
        $this->var = 1;
        echo $this->var;
    }
}
$obj = new Test();
$obj->func();
*/
?>
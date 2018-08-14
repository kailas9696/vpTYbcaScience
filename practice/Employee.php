<?php
// Define a class
class Employee
{
// Declaring three protected varaibles protected $font_size;
 protected $name;
 protected $salary;
// Static $i=0;
// Declarte construct method which accepts three parameters and the method Addition()
 function __construct($n,$s){
	$this->name = $n;
	$this->salary = $s;
	$this->display();
	

 }
// Declare a method for customize print 
 public function display(){
 	// $c = $this->a+$this->b;
    echo"<br>Name : ".$this->name."<br> Salary : ".$this->salary;
 }

 }


// Define a subclass
class Mysubclass extends Employee{

}
// Create objects and passes parameters
 $p = new Employee("Patil",2);
 
 $s = new Mysubclass("Nagesh",5);
// $p->Addition();

?>







<?php
/**ASS1 B3. Write a PHP program to create a class Worker that has data members as
Worker_Name, No_of_Days_worked, Pay_Rate. Create and initialize the object using
default constructor, Parameterized constructor. Also write necessary member function to
calculate and display the salary of worker.***/

class worker
{
public $name,$days,$rate;
function __construct($n,$d,$r)
{
$this->name=$n;
$this->days=$d;
$this->rate=$r;
}
function calculate_sal()
{
$salary=$this->days*$this->rate;
echo"$salary<br>";
}

}
$ob= new worker('raj',20,200);
$ob->calculate_sal();
/*****OUTPUT****

4000
*****/
?>





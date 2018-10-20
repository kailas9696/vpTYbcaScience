



<?php
/***ASS1.B1 Write a PHP program to create a class Employee that contains data members as Emp_Name,
Dept_name , Basic_sal,DA, HRA,TA , IT,PF,PT , GROSS, DEDUCTION ,NET . It has member
functions calculate_gross , calculate_deductions , Calculate_net_salary . Display pay slip of
employee. Create and Initialize members Emp_Name, Dept_name , Basic_sal of Employee
object by using parameterized constructor.***/

class employee
{
public $eid,$name,$dept,$b_sal,$da,$hra,$ta,$it,$pf,$pt,$gross,$deduct,$net;
function __construct($name,$dept,$b_sal,$da,$hra,$ta,$it,$pf,$pt,$gross,$deduct)
{
$this->name=$name;
$this->dept=$dept;
$this->b_sal=$b_sal;
$this->da=$da;
$this->hra=$hra;
$this->ta=$ta;
$this->it=$it;
$this->pf=$pf;
$this->pt=$pt;
$this->gross=$gross;
$this->deduct=$deduct;
}
public function calculate_gross()
{
$t=$this->b_sal+$this->da+$this->hra+$this->ta+$this->it+$this->pf+$this->pt+$this->gross+$this->deduct;
echo"employee name:$this->name;<br> employee department:$this->dept;<br>gross salary:".$t;
return $t;
}
public function calculate_deduction()
{
$total_ded=$this->pf+$this->it+$this->pt;
echo" total deduction;" .$total_ded;
return $total_ded;
}
public function calculate_net_salary()
{
$a=$this->calculate_gross();
$b=$this->calculate_deduction();
$net_salary=$a+$b;
echo"<br> net salary :".$net_salary;
}
}
$ob=new employee("komal","bca",23000,300,20,200,30,36,10,100,40);

$ob->calculate_net_salary();
/**********OUTPUT****

employee name:komal;
employee department:bca;
gross salary:23736 total deduction;76
net salary :23812 

**********/

?>









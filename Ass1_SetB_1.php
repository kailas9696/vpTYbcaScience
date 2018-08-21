<?php
/*    1. Write a PHP program to create a class Employee  that contains data members as Emp_Name, Dept_name , Basic_sal,DA, HRA,TA , IT,PF,PT , GROSS, DEDUCTION ,NET . It has member functions calculate_gross , calculate_deductions , Calculate_net_salary . Display pay slip of employee. Create  and  Initialize  members Emp_Name, Dept_name , Basic_sal  of  Employee   object  by  using parameterized  constructor. 
*/

 

class Employee{
	echo $_POST['a'];
	public $eid,$Emp_Name,$Dept_name,$Basic_sal,$DA,$HRA,$TA,$IT,$PF,$PT,$GROSS,$DEDUCTION,$NET;
	function __construct($Emp_Name,$Dept_name,$Basic_sal,$DA,$HRA,$TA,$IT,$PF,$PT,$GROSS,$DEDUCTION){
		$this->Emp_Name=$Emp_Name;
		$this->Dept_name=$Dept_name;
		$this->Basic_sal=$Basic_sal;
		$this->DA=$DA;
		$this->HRA=$HRA;
		$this->TA=$TA;
		$this->IT=$IT;
		$this->PF=$PF;
		$this->PT=$PT;
		$this->GROSS=$GROSS;
		$this->DEDUCTION=$DEDUCTION;
	}
	public function calculate_gross(){
		//$this->Basic_sal=$Basic_sal;
	
		$T = $this->Basic_sal+$this->DA+$this->HRA+$this->TA+$this->IT+$this->PF+$this->PT+$this->GROSS+$this->DEDUCTION;
        echo " Employee Name : $this->Emp_Name ; Employee Department : $this->Dept_name ;<br> Gross Salary : ".$T;
        return $T; 
	}
	public function calculate_deductions(){
		$total_ded = $this->PF+$this->IT+$this->PT;
		echo " ; Total Deduction : ".$total_ded;
		return $total_ded;
	
	}
	public function Calculate_net_salary(){
		$a=$this->calculate_gross();
		$b=$this->calculate_deductions();
		$net_salary = $a+$b;
		echo "<br> Net Salary : ".$net_salary;

	}
}


$ob=new Employee("Nagesh","BCA Science",233333,2222,34,33,33,444,44,88,99,99);
// echo $ob->Emp_Name;
// $ob->calculate_gross();
// $ob->calculate_deductions();
$ob->Calculate_net_salary();
?>

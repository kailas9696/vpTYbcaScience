<?php
/*ASS1.A1 Write a Calculator class that can accept two values, then add them, subtract them, multiply them
together, or divide them on request.
For example:
$calc = new Calculator( 3, 4 );
echo $calc- >add(); // Displays “7”
echo $calc- >multiply(); // Displays “12”
*/

class calculator
{
public $a=3;
public $b=4;
public function add()
{
$c=$this->a+$this->b;
echo"$c";
echo"<br>";
}
public function sub()
{
$c=$this->a-$this->b;
echo"$c";
echo"<br>";
}
public function mul()
{
$c=$this->a*$this->b;
echo"$c";
echo"<br>";
}
public function div()
{
$c=$this->a/$this->b;
echo"$c";
}
}
$method=new calculator(3,4);
$method->add();
$method->sub();
$method->mul();
$method->div();

/*****Output******

7
-1
12
0.75
*******/

?>



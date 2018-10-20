<?php
/*Create a class named DISTANCE with feet and inches as data members. The class has the following
member functions: convert_feet_to_inch() , convert_inch_to_feet() . Display options using radio
button and display conversion on next page.*/

$n1=$_GET['n1'];
$n2=$_GET['n2'];
$ch=$_GET['ch'];
class Dist
{
public function convert_f_to_i($n1,$n2)
{
$c1=($n1/12);
echo"convert of  feet to inch $c1";
}
public function convert_i_to_f($n1,$n2)
{
$c2=$n1*12;
echo"convert of  inch to feet is  $c2";
}
}
switch($ch)
{
 case f:$ob=new Dist;
         $ob->convert_f_to_i($n1,$n2);
          break;
case i:$ob1=new Dist;
         $ob1->convert_i_to_f($n1,$n2);
           break;
}
?>


<?php
/**ASS1 ..A2. Write a PHP program to create a class temperature which contains data members as
Celsius and Fahrenheit . Create and Initialize all values of temperature object by using
parameterized constructor . Convert Celsius to Fahrenheit
and Convert Fahrenheit to Celsius
using member functions. Display conversion on next page.**/

 class tempreature
{
public $celslus,$fahrenheit;
function __construct($c,$f)
{
$this->celslus=$c;
$this->fahrenheit=$f;
}
function con_ce_to_fa()
{
$celslus=($this->fahrenheit-32)*5/9;
echo "$celslus<br>";
}
function con_fa_to_ce()
{
$fahrenheit=($this->celslus*(9/5))+32;
echo $fahrenheit;
}
}
$ob= new tempreature(12,6);
$ob->con_ce_to_fa();
$ob->con_fa_to_ce();

/*******OUTPUT******

-14.444444444444
53.6 

**********/


?>






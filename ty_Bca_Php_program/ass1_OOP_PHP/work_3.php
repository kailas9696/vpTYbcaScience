

<?php
/**3. Write a PHP program to create class circle having radius data member and two member functions
find_circumfernce () and find_area() . Display area and Circumference depending on user’s
preference.*/
$c=$_GET['c'];
$a=$_GET['a'];
$r=$_GET['r'];
class circle
{
public function find_cir($r)
{
$c=2*3.14*$r;
echo" find the circumference";
echo "$c<br>";
}
public function area($r)
{
$a=3.14*$r*$r;
echo "find the circle area";
echo $a;
}
}
$ob=new circle;
$ob->find_cir(2);
$ob2=new circle;
$ob2->area(3);

/********OUTPUT**********
find the circumference12.56
find the circle area28.26

***********/
?>



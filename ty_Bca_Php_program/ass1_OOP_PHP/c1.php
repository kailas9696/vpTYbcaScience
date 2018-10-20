


<!--ASS1.C
Write a PHP program to create a class article having articleid, name, articleqty, price. Write
menu driven program to perform following functions :( Use array of objects)
i. Display details of all articles purchased.
ii. Display details of articles whose price exceeds 500
iii. Display details of articles whose quantity exceeds 50 -->


<html>


<head><titile></title></head>
<body>
<form action="<?php echo($_SERVER['PHP_SELF']);?>" method="GET">
<input type="radio" name="ch" value=1>display details of all article purches
<input type="radio" name="ch" value=2>display details of article whose price exceeds 500
<input type="radio" name="ch" value=3>display details of articles whose quantity exceeds 50 
<input type="submit" value="submit">
</form>
</body>
</html>


<?php

class article
{
public $aid,$name,$quality,$price;
function __construct($a,$n,$q,$p)
{
$this->aid=$a;
$this->name=$n;
$this->quantity=$q;
$this->price=$p;
}
public function display_article($a)
{
foreach($a as $key=>$value)
{
echo"$value->display_article<br>";
echo"no of article:$value->aid ;<br> name of article: $value->name;<br> name of quantity:$value->quantity;<br> price:$value->price";
}
}
public function price_exceed($a)
{
foreach($a as $key=>$value)
{
if($value->price>500)
{
echo"$value->price_exceed";
echo"no of article: $value->aid;<br> name of article: $value->name;<br> name of quantity:$value->quantity;<br> price:$value->price";
}
}
}
public function quantity_exceed($a)
{

foreach($a as $key=>$value)
{
if($value->quantity>50)
{
echo" the quantity exceed 50";
echo"no of article: $value->aid;<br> name of article: $value->name;<br> name of quantity:$value->quantity;<br> price:$value->price";
}
}
}
}

$ch=$_GET['ch'];
$ob=new article(1,'raj',3,400);
$ob1=new article(2,'ram',55,600);
$a=array($ob,$ob1);
switch($ch)
{
case 1:
       $ob->display_article($a);
          break;
case 2:
       $ob->price_exceed($a);
        break;
case 3:
       $ob->quantity_exceed($a);
        break;
}
/*

***OUTPUT***

display details of all article purches.. display details of article whose price exceeds 500 ...display details of articles whose quantity exceeds 50 ..the quantity exceed 50no of article: 2;
name of article: ram;
name of quantity:55;
price:600 */


?>










<html>
<! Write a PHP program for the following create a calculator that can store two values and
perform operations like add, subtract, multiplication and divide (using Self Processing
form)!>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="GET">
enter the first number<input type="text" name="first"><br>
enter the second number<input type="text" name="second"><br>

addition<input type="radio" name= "ch" value="1" ><br>
subtraction<input type="radio" name="ch" value="2"><br>
multiplication<input type="radio" name="ch" value="3"><br>
division<input type="radio" name="ch" value="4"><br>

<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$a=$_GET['first'];
$b=$_GET['second'];

$ch=$_GET['ch'];

switch($ch)
{
case 1: $c=$a+$b;
        echo $c;
         break;
case 2: $c=$a-$b;
        echo $c;
         break;
case 3: $c=$a*$b;
        echo $c;
         break;
case 4: $c=$a/$b;
        echo $c;
         break;
}
?>

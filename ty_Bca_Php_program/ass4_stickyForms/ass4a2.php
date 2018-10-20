
<html>
<!Write a PHP script for the following: Design a form to accept a number from the user.
Perform the operations and show the results.
 Check whether number is palindrome or not.
 Reverse the number using recursions.
(Use the concept of self processing page.)!>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
enter the number<input type="text" name="n">
<input type="radio" value="1">check wheather number is palindrome or not
<input type="radio" value="1">reverse number using recursion
<input type="submit" name="submit">
</form>
</body>
</html>
   


<?php

$n=$_GET['n'];
$temp=$n;
$sum=0;

while($n>0)
{
$r=$n%10;
$sum=$sum*10+$r;

//$n=$n*10+$n%10;
$n=floor($n/10);

}
echo"$sum";
if($temp==$sum)
{
echo"palindrome ";
}
else
{
echo"not palindrome";
}
?>


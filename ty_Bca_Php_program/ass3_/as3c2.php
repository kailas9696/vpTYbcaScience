<html>
<!
 c2.Write a PHP script that enables the user to construct his own web form with the capabilities to
    choose control & then allow the user to submit the form & display the selected controls on
     next page.
!>
<body>
<form action="ass3c2.php" method="POST">
Enter the user id:<input type="text" name="n1"><br>
Enter the name:<input type="text" name="n2"><br>
Enter the Address:<input type="text" name="n3"><br>
Enter the email:<input type="text" name="n4"><br>
Enter the mobile number:<input type="text" name="n5"><br>
Select your choice:<br>
<input type="radio" name="ch" value="male">male<br>
<input type="radio" name="ch" value="female">female<br>
Select your qualification:<br>
<input type="checkbox" name="c1" value="hsc">hsc<br>
<input type="checkbox" name="c1" value="bsc">bsc<br>
<input type="checkbox" name="c1" value="bca">bca<br>
<input type="checkbox" name="c1" value="bba">bba<br>

<input type="submit" value="submit">
<input type="reset" value="cancel">
</form>
</body>
</html>

php file:->ass3c2.php
<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$ch=$_POST['ch'];
$c1=$_POST['c1'];
echo"USER DETAILS ARE AS FOLLOWS:::<br>";
echo"The user id is : ".$n1."<br>";
echo"The user name is : ".$n2."<br>";
echo"The user address is : ".$n3."<br>";
echo"The user email is : ".$n4."<br>";
echo"The user password is : ".$n5."<br>";
switch($ch)
{
case 'male':echo"gender is male";
             break;
case 'female':echo"gender is  female";
             break;
}
if($c1=='hsc')
echo "the qualification is Hsc<br>";
else if($c1=='bsc')
echo "the qualification is Bsc<br>";
else if($c1=='bca')
echo "the qualification is bca<br>";
else if($c1=='bba')
echo "the qualification is bba<br>";
?>

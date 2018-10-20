<html>
<!
 A3.Write a PHP program that takes name and age from an HTML page. If the age is less than
    18, it should send a page with “hello <name>,and u are not authorized to visit this site”
    otherwise it should send “welcome <name> to this site” message where name should be
    replaced with the entered name otherwise it should send welcome<name> to the site
    message.
!>
<body>
<form action="d2.php" method="POST">
Enter the Name:<input type="text" name="n1"><br>
Enter the AGE:<input type="text" name="n2"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</form>
</body>
</html>

PHP FILE---->d2.PHP

<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
if($n2>18)
{
 echo"hello<br>";
 echo"u are not authorized to visit this site";
}
else
{
 echo"WELCOME<br>";
 echo"u are not authorized to visit this site";
}

?>
/*****PHp output

WELCOME
u are not authorized to visit this site
*******************************************/
